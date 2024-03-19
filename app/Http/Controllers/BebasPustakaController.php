<?php

namespace App\Http\Controllers;

use App\Models\BebasPustaka;
use App\Http\Requests\StoreBebasPustakaRequest;
use App\Http\Requests\UpdateBebasPustakaRequest;
use App\Http\Requests\SearchBebasPustakaRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BebasPustakaController extends Controller
{ 
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $DashboardBP = BebasPustaka::paginate(10);
        
        return view('admin-bebaspustaka', [
            'DashboardBP' => $DashboardBP,
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
            'surat_cutiundur' => 'file|mimes:pdf,doc,docx',
            'judul_buku' => 'string',
            'pengarang' => 'string',
            'tahun_terbit' => 'string',
        ]);

        if($request->file('surat_cutiundur')){
            $bebasPustaka = $request->file('surat_cutiundur')->store('public/files-cuti&undur');

            $Pustaka = new BebasPustaka;

            $Pustaka->Surat_cutiundur = $bebasPustaka;

            $Pustaka->Mahasiswa()->associate(session('Mahasiswa_id'));

            $Pustaka->save();

            session()->put('pustaka_id', $Pustaka->id);
        };

        

        if ($request->File('bukti_sumbangan') || $request->File('bukti_karyailmiah')) {

            $Pustaka = new BebasPustaka ;
            
            $Pustaka->Judul_buku = $validateData['judul_buku'];

            $Pustaka->Pengarang = $validateData['pengarang'];

            $Pustaka->Tahun_terbit = $validateData['tahun_terbit'];
        
            // Handle 'bukti_bukusumbangan' file upload
            if ($request->hasFile('bukti_sumbangan')) {
                $bebasPustaka = $request->file('bukti_sumbangan')->store('public/files-sumbangan');
                $Pustaka->Bukti_sumbangan = $bebasPustaka;
            }
        
            // Handle 'bukti_karyailmiah' file upload
            if ($request->hasFile('bukti_karyailmiah')) {
                $bebasPustaka = $request->file('bukti_karyailmiah')->store('public/files-karyailmiah');
                $Pustaka->Bukti_karyailmiah = $bebasPustaka;
            }
        
            // Associate with Mahasiswa and save
            $Pustaka->Mahasiswa()->associate(session('Mahasiswa_id'));
            $Pustaka->save();
        
            // Set the pustaka_id in the session
            session()->put('pustaka_id', $Pustaka->id);
        }
        
        return redirect('/bp-transaksi')->with('success', 'Data berhasil disimpan!');
       
    }
    public function search(Request $request){
        $nama = $request->search;

        $bebasPustakas = BebasPustaka::whereHas('mahasiswa', function ($query) use ($nama) {
            $query->where('Nama', 'like', '%' . $nama . '%');
        })->paginate(10);
 
        if ($bebasPustakas->isEmpty()) {
            // Jika hasil pencarian kosong, beri warning
            return view('/admin-bebaspustaka', ['warning' => 'Nama tidak ditemukan']);
        } else {
            // Jika hasil pencarian tidak kosong, tampilkan hasil
            return view('/admin-bebaspustaka', ['DashboardBP' => $bebasPustakas]);
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
    public function show(BebasPustaka $bebasPustaka)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BebasPustaka $bebasPustaka)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BebasPustaka $bebasPustaka)
    {
        $bebasPustaka = BebasPustaka::where('id', session('pustaka_id'))->first();

        $validateData = $request->validate([
            'petugas_id' => 'required|string',
            'tgl_pengajuan' => 'required|string',
        ]);

        $bebasPustaka->Tgl_pengajuan = $validateData['tgl_pengajuan'];

        $bebasPustaka->Petugas_id = $validateData['petugas_id'];

        $bebasPustaka->save();

        return redirect('/bp')->with('success', 'Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BebasPustaka $bebasPustaka)
    {
        //
    }
}
