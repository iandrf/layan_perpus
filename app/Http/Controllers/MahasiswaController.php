<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;
use App\Http\Requests\SearchMahasiswaRequest;
use App\Models\SumbanganBuku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use illuminate\http\session;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    
    {
        //
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
        // Validate the request
        $validateData = $request->validate([
            'Nama' => 'required|string', 
            'Email' => 'required|email',
            'NPM' => 'required|string',
            'program_studi' => 'required|string',
        ]);

        // Set the user_id attribute
        // $validateData['user_id'] = auth()->id();
        $Mahasiswa = new Mahasiswa([
            'Nama' => $validateData['Nama'],
            'Email' => $validateData['Email'],
            'NPM' => $validateData['NPM'],
            'ProgramStudi' => $validateData['program_studi'],
        ]);

        $Mahasiswa->save(); 

        session()->put('Mahasiswa_id', $Mahasiswa->id);

        $selectedOption = $request->input('radio');

        // Add your logic here to process the form data based on the selected option
        $selectedOption = $request->input('radio');

        if ($selectedOption == 'wisuda_ijazah') {
            return redirect('/bp-wisuda&ijazah')->with('success', 'Form submitted successfully');
        } elseif ($selectedOption == 'cuti_undur') {
            return redirect('/bp-cuti&undur')->with('success', 'Form submitted successfully');
        } else {
            return redirect('/bp')->with('success', 'Form submitted successfully');
        }

        

    }

    public function search(Request $request){

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
