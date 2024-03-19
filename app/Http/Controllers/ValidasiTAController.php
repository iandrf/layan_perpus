<?php

namespace App\Http\Controllers;

use App\Models\ValidasiTA;
use App\Http\Requests\StoreValidasiTARequest;
use App\Http\Requests\UpdateValidasiTARequest;
use Illuminate\Http\Request; 
use App\Models\Mahasiswa;

class ValidasiTAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DashboardLTA = ValidasiTA::paginate(10);

        return view('admin-lta', [
            'DashboardLTA' => $DashboardLTA,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            'email'=>'required|email',
            'nama'=>'required|string',
            'npm'=>'required|string',
            'program_studi' => 'required|string',
            'judul_penelitian'=>'required|string',
            'pembimbing'=>'required|string',
            'tanggal_sidang'=>'required|string',
            'periode_wisuda'=>'required|string',
            'upload_TAjurnal' => 'file|mimes:pdf,doc,docx',
            'verifikasi_link'=>'required|string',
            'radio'=>'required|string'
        ]);

        
        $validasiTA = new ValidasiTA;
        if($request->file('upload_TAjurnal')){ 
            $fileName = $request->file('upload_TAjurnal')->getClientOriginalName();
            $extension = $request->file('upload_TAjurnal')->getClientOriginalExtension();
            $fileName = $fileName .".".$extension;
            $sumbanganBuku = $request->file('upload_TAjurnal')->storeAs('public/files-upload_TAjurnal', $fileName);
            $sBuku->Bukti_pembelian = "files-upload_TAjurnal/" .$fileName;
        }
            
        $Mahasiswa = new Mahasiswa([
            'Email'=>$validateData['email'],
            'Nama' => $validateData['nama'],
            'NPM' => $validateData['npm'],
            'ProgramStudi' => $validateData['program_studi'],
        ]);
        $Mahasiswa->save();

            $validasiTA->Judul_penelitian = $validateData['judul_penelitian'];
            $validasiTA->Nama_pembimbing = $validateData['pembimbing'];
            $validasiTA->Tanggal_sidang = $validateData['tanggal_sidang'];
            $validasiTA->Periode_wisuda = $validateData['periode_wisuda'];
            $validasiTA->Verifikasi_link = $validateData['verifikasi_link'];
            $validasiTA->Karya_ilmiah = $validateData['radio'];
            $validasiTA->Mahasiswa()->associate($Mahasiswa->id);
            $validasiTA->save();

        return redirect()->back();  
    }

    public function search(Request $request){
        $nama = $request->search;

        $validasiTAs = ValidasiTA::whereHas('mahasiswa', function ($query) use ($nama) {
            $query->where('Nama', 'like', '%' . $nama . '%');
        })->paginate(10); 
 
        if ($validasiTAs->isEmpty()) {
            // Jika hasil pencarian kosong, beri warning
            return view('/admin-lta', ['warning' => 'Nama tidak ditemukan']);
        } else {
            // Jika hasil pencarian tidak kosong, tampilkan hasil
            return view('/admin-lta', ['DashboardLTA' => $validasiTAs]);
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
    public function show(ValidasiTA $validasiTA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ValidasiTA $validasiTA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateValidasiTARequest $request, ValidasiTA $validasiTA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ValidasiTA $validasiTA)
    {
        //
    }
}
