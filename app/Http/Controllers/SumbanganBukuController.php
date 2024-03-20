<?php

namespace App\Http\Controllers;

use App\Models\SumbanganBuku;
use App\Http\Requests\StoreSumbanganBukuRequest;
use App\Http\Requests\UpdateSumbanganBukuRequest;
use App\Http\Requests\SearchSumbanganBukuRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class SumbanganBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DashboardSB = SumbanganBuku::paginate(10);
        
        return view('admin-sumbanganbuku', [
            'DashboardSB' => $DashboardSB,
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
            'petugas_id' => 'required|string',
            'no_wa' => 'required|string',
            'periode_wisuda' => 'required|string',
            'judul_buku' => 'required|string',
            'pengarang' => 'required|string',
            'tahun_terbit' => 'required|string',
            'tanggal_pesan' => 'required|string',
            'tanggal_penyerahan' => 'required|string',
            'bukti_pembelian' => 'file|mimes:pdf,doc,docx',
            'radio' => 'required|string',
        ]);

        $sBuku = new SumbanganBuku;
        if($request->file('bukti_pembelian')){ 
            $fileName = $request->file('bukti_pembelian')->getClientOriginalName();
            $extension = $request->file('bukti_pembelian')->getClientOriginalExtension();
            $fileName = $fileName .".".$extension;
            $sumbanganBuku = $request->file('bukti_pembelian')->storeAs('public/files-buktiPembelian', $fileName);
            $sBuku->Bukti_pembelian = "files-buktiPembelian/" .$fileName;
        }

        $Mahasiswa = new Mahasiswa([
            'Nama' => $validateData['nama'],
            'Email' => $validateData['email'],
            'NPM' => $validateData['npm'],
            'ProgramStudi' => $validateData['program_studi'],
        ]);

        $Mahasiswa->save();

            $sBuku->Nomber_wa = $validateData['no_wa'];
            $sBuku->Periode_wisuda = $validateData['periode_wisuda'];
            $sBuku->Judul_buku = $validateData['judul_buku'];
            $sBuku->Tahun_terbitBuku = $validateData['tahun_terbit'];
            $sBuku->Pengarang = $validateData['pengarang'];
            $sBuku->Tanggal_pemesananBuku = $validateData['tanggal_pesan'];
            $sBuku->Tanggal_penyerahanBuku = $validateData['tanggal_penyerahan'];
            $sBuku->Pembelian_denganCara = $validateData['radio'];
        

        $sBuku->petugas_id = $validateData['petugas_id'];
        $sBuku->Mahasiswa()->associate($Mahasiswa->id);
        $sBuku->save();

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }
    public function search(Request $request){
        $nama = $request->search;

        $sumbanganBukus = SumbanganBuku::whereHas('mahasiswa', function ($query) use ($nama) {
            $query->where('Nama', 'like', '%' . $nama . '%');
        })->paginate(10);
 
 
        if ($sumbanganBukus->isEmpty()) {
            // Jika hasil pencarian kosong, beri warning
            return view('/admin-sumbanganbuku', ['warning' => 'Nama tidak ditemukan']);
        } else {
            // Jika hasil pencarian tidak kosong, tampilkan hasil
            return view('/admin-sumbanganbuku', ['DashboardSB' => $sumbanganBukus]);
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
    public function show(SumbanganBuku $sumbanganBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SumbanganBuku $sumbanganBuku)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSumbanganBukuRequest $request, SumbanganBuku $sumbanganBuku)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SumbanganBuku $sumbanganBuku)
    {
        //
    }
}
