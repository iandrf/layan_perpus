<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumbangan Buku</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    </style>
</head>
<body>
    {{-- {{$errors}} --}}
    <nav class="border-gray-50 bg-gradient-to-b from-blue-600 to-white dark:border-gray-700">
        <div class="flex flex-auto items-center justify-between m-0 p-6">
            <a href="#" class="flex place-items-center">
                <img src="/image/logoutama.png" class="Logo h-12 mr-1" alt="Widyatama Logo" />
                <div class="self-baseline mt-2 text-base font-semibold whitespace-nowrap dark:text-black">Widyatama Information</div>
                <div class="self-end -ml-36 text-base font-semibold whitespace-nowrap dark:text-black">Online System</div>
                <a href="/Home" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Home</a>
            </a>
        </div>
    
        <div>
        <h1 class="p-5 text-3xl font-semibold text-gray-900 dark:text-black">Sumbangan Buku</h1>
        </div>
        
        <form action="/sumbanganb" method="post" enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6 mb-6 p-5 md:grid-cols-2">
                <div> 
                    <label for="Email" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Email</label>
                    <input name="email" type="text" id="Email" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="Nama_Lengkap" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama Lengkap</label>
                    <input name="nama" type="text" id="Nama_Lengkap" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="NPM" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">NPM</label>
                    <input name="npm"type="text" id="NPM" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>  
                <div>
                    <label for="program_studi" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Program Studi</label>
                    <div class="flex">
                        <label for="program_studi" class="sr-only">Program Studi</label>
                        <select name="program_studi" id="program_studi" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>Program Studi</option>
                            <option value="D3-Manajemen">D3-Manajemen</option>
                            <option value="D3-Akuntansi">D3-Akuntansi</option>
                            <option value="D3-Multimedia">D3-Multimedia</option>
                            <option value="D3-Bahasa Jepang">D3-Bahasa Jepang</option>
                            <option value="D3-Teknik Mesin">D3-Teknik Mesin</option>
                            <option value="D4-Desain Grafis">D4-Desain Grafis</option>
                            <option value="D4-Produksi Film & Televisi">D4-Produksi Film & Televisi</option>
                            <option value="S1-Manajemen">S1-Manajemen</option>
                            <option value="S1-Akuntansi">S1-Akuntansi</option>
                            <option value="S1-Multimedia">S1-Multimedia</option>
                            <option value="S1-Bahasa Jepang">S1-Bahasa Jepang</option>
                            <option value="S1-Bahasa Inggris">S1-Bahasa Inggris</option>
                            <option value="S1-Teknik Industri">S1-Teknik Industri</option>
                            <option value="S1-Teknik Informatika">S1-Teknik Informatika</option>
                            <option value="S1-Sistem Informasi">S1-Sistem Informasi</option>
                            <option value="S1-Teknik Elektro">S1-Teknik Elektro</option>
                            <option value="S1-Teknik Sipil">S1-Teknik Sipil</option>
                            <option value="S1-Teknik Mesin">S1-Teknik Mesin</option>
                            <option value="S1-Perpustakaan & Sains Informasi">S1-Perpustakaan & Sains Informasi</option>
                            <option value="S1-Perdagangan Internasional">S1-Perdagangan Internasional</option>
                            <option value="S2-Manajemen">S2-Manajemen</option>
                            <option value="S2-Akuntansi">S2-Akuntansi</option>
                            <option value="Profesi Akuntasi (PPAk)">Profesi Akuntasi (PPAk)</option>
                    </select>
                </div>
            </div>
                <div>
                    <label for="no_wa" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">No Whatsapp</label>
                    <input name="no_wa"type="text" id="no_wa" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="periode_wisuda" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Periode Wisuda</label>
                    <input name="periode_wisuda" type="text" id="periode_wisuda" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="judul_buku" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Judul Buku yang Disumbangkan</label>
                    <input name="judul_buku" type="text" id="judul_buku" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="(Hubungi petugas di No.WA 0855-1707-676 untuk mengetahui judul buku yang dapat disumbangkan)" required>
                </div>
                <div>
                    <label for="pengarang" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Pengarang</label>
                    <input name="pengarang" type="text" id="pengarang" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="tahun_terbit" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tahun Terbit</label>
                    <input name="tahun_terbit" type="text" id="tahun_terbit" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>  
                <div>
                    <label for="tanggal_pesan" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Pemesanan</label>
                    <input name="tanggal_pesan" type="date" id="tanggal_pesan" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="tanggal_penyerahan" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Penyerahan Buku</label>
                    <input name="tanggal_penyerahan" type="date" id="tanggal_penyerahan" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="petugas" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Petugas yang Menerima</label>                
                    <div class="flex">
                        <label for="Petugas_yang_menerima" class="sr-only">Petugas yang Menerima</label>
                        <select name="petugas_id" id="Petugas" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Petugas yang Menerima</option>
                            @foreach ($petugas as $petugas)
                                <option value="{{$petugas->id}}">
                                    {{$petugas->Nama}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            </div>

            <div class="p-5">
                <div class="text-center">
                    <div class="p-3 mb-2">
                        <label for="bukti" class="mb-2 p-5 text-base font-semibold text-gray-900 dark:text-black">Upload Invoice Pembelian Buku</label>
                    </div>
                    <div class="ring-offset-2 ring-2 ring-offset-slate-700 dark:ring-offset-slate-900 max-w-md mx-auto p-6 mb-7 bg-gray-400 dark:bg-gray-500 rounded-lg shadow-md justify-center">
                        <label class="block text-sm font-medium text-black dark:text-black mb-2" for="file_input">Upload file</label>
                        <input name="bukti_pembelian" class="block w-full py-2 px-4 text-sm text-white dark:text-gray-300 border border-gray-300 rounded-lg cursor-pointer bg-gray-500 dark:bg-gray-500" id="multiple_files" type="file" multiple>
                    </div>
                </div>
            </div>
        </div>

            <p class="ml-5 mb-5 text-base font-semibold text-black dark:text-black">PEMBELIAN BUKU DENGAN CARA:</p>
        <div >
            <div class="ml-5 flex items-center">
                <input id="default-radio-1" type="radio" value="Mandiri" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-blue-600 dark:border-gray-600">
                <label for="default-radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Mandiri / Membeli Sendiri ke Toko</label>
            </div>
            <div class="ml-5 flex items-center">
                <input checked id="default-radio-2" type="radio" value="Agen_penerbit" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-blue-600 dark:border-gray-600">
                <label for="default-radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-black">Melalui Agen Penerbit</label>
            </div>
        </div>
            @if(session('success'))
                <div class="bg-green-200 text-green-800 p-2 mb-4 rounded-md mx-auto text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="flex justify-center px-5">
                <button type="submit" class="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
                    Submit
                </button>
            </div>
        </form>
        <footer class="bg-blue-950 shadow mt-5 dark:bg-blue-950">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-white sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
            </div>
        </footer>
</body>
</html>