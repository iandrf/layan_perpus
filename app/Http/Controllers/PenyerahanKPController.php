<?php

namespace App\Http\Controllers;

use App\Models\PenyerahanKP;
use App\Http\Requests\StorePenyerahanKPRequest;
use App\Http\Requests\UpdatePenyerahanKPRequest;
use App\Http\Requests\SearchPenyerahanKPRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class PenyerahanKPController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DashboardKP = PenyerahanKP::paginate(10);
        
        return view('admin-kp', [
            'DashboardKP' => $DashboardKP,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|string', 
            'email' => 'required|email',
            'npm' => 'required|string',
            'program_studi' => 'required|string',
            'judul_laporanKP'=>'required|string',
            'tanggal'=>'required|string',
            'petugas_id' => 'required|string',
        ]);

        $Mahasiswa = new Mahasiswa([
            'Nama' => $validateData['nama'],
            'Email' => $validateData['email'],
            'NPM' => $validateData['npm'],
            'ProgramStudi' => $validateData['program_studi'],
        ]);
 
        $Mahasiswa->save(); 

        $penyerahanKP = new PenyerahanKP([
            'Judul_laporanKP'=>$validateData['judul_laporanKP'],
            'Tanggal_penyerahan'=>$validateData['tanggal'],
        ]);
        $penyerahanKP->petugas_id = $validateData['petugas_id'];

        $penyerahanKP->Mahasiswa()->associate($Mahasiswa->id);
        $penyerahanKP->save();

        return redirect()->back();
        
    }

    public function search(Request $request){
        $nama = $request->search;

        $penyerahanKPs = PenyerahanKP::whereHas('mahasiswa', function ($query) use ($nama) {
            $query->where('Nama', 'like', '%' . $nama . '%');
        })->paginate(10);
 
        if ($penyerahanKPs->isEmpty()) {
            // Jika hasil pencarian kosong, beri warning
            return view('/admin-kp', ['warning' => 'Nama tidak ditemukan']);
        } else {
            // Jika hasil pencarian tidak kosong, tampilkan hasil
            return view('/admin-kp', ['DashboardKP' => $penyerahanKPs]);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/Home');
    }
    /**
     * Display the specified resource.
     */
    public function show(PenyerahanKP $penyerahanKP)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PenyerahanKP $penyerahanKP)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenyerahanKPRequest $request, PenyerahanKP $penyerahanKP)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PenyerahanKP $penyerahanKP)
    {
        //
    }
}
