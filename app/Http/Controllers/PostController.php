<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\Postbuku;

class PostController extends Controller
{
    public function index()
    {
        return view('postb');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',  
            'description' => 'required',
            'image' => 'image|max:2048', // Memeriksa ukuran file hingga 2048 kilobita
        ]);
        
        if($request->file('image')){
            $validatedData['image'] = $request -> file('image')->store('post-buku');
        }

        if (Auth::check()) { 
        $validatedData['user_id'] = auth()->user()->id;

        Postbuku::create($validatedData);
        return redirect('/')->with('success', 'Buku telah diposting!');
    } else {
        // Lakukan penanganan kesalahan jika pengguna tidak terautentikasi
        // Misalnya, kembalikan pengguna ke halaman login
        return redirect()->route('/')->with('error', 'Anda harus login terlebih dahulu.');
    }
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit-post', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255,title,' . $id,
            'description' => 'required',
            'image' => 'image|max:2048', // Memeriksa ukuran file hingga 2048 kilobita
        ]);

        $post = Post::findOrFail($id);
        $post->update($validatedData);

        return redirect('home')->with('success', 'Buku telah diperbarui!');
    }
}
