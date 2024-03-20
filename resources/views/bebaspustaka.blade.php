<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss"></style>
</head>
<body>
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
<h1 class="p-5 text-3xl font-semibold text-gray-900 dark:text-black">Bebas Pustaka</h1>
</div>
<form action="/mahasiswa" method="post">
    @csrf
    <div class="grid gap-6 mb-6 p-5">
        <div>
           <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Email</label>
           <input name="Email" required autofocus value="{{ old('email')}}" type="text" id="email" class=" @error('email') is-invalid @enderror bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
            @error('email')
                <div class="invalid-feedback" style="color: red; font-size:15px">
                Email Wajib Di Isi 
                </div>
            @enderror
        </div>
        <div>
           <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama Lengkap</label>
           <input name="Nama" value="{{ old('nama')}}" type="text" id="nama" class="@error('nama') is-invalid @enderror bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
            @error('nama')
           <div class="invalid-feedback" style="color: red; font-size:15px">
               Nama Wajib Di Isi 
           </div>
            @enderror
        </div>
        <div>
           <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">NPM</label>
           <input name="NPM" value="{{ old('npm')}}" type="text" id="npm" class="@error('npm') is-invalid @enderror bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
           @error('npm')
           <div class="invalid-feedback" style="color: red; font-size:15px">
               NPM Wajib DI Isi 
           </div>
            @enderror
        </div>
        <div>

        <label for="program_studi" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Program Studi</label>
        <div class="flex">
            <label for="program_studi" class="sr-only">Program Studi</label>
            <select id="program_studi" name="program_studi" required autofocus class="@error('program_studi') is-invalid @enderror bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                <option selected disabled="Program Studi">Program Studi</option>
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
            @error('program_studi')
            <div class="text-red-500 text-sm mt-1" style="color: red; font-size:15px">
                Program Studi Wajib Di Isi 
            </div>
            @enderror
        </div>
    </div>
    </div>
    <div class="flex-auto grid gap-4 mb-5 p-5">
        <p class="text-base font-semibold text-black dark:text-black">PENGAJUAN BEBAS PUSTAKA DENGAN CARA :</p> 
        <div class="flex items-center">
            <input id="radio-1" type="radio" value="wisuda_ijazah" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="radio-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Wisuda dan Pengambilan Ijazah</label>
        </div>
        <div class="flex items-center">
            <input id="radio-2" type="radio" value="cuti_undur" name="radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="radio-2" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-900">Cuti Akademik atau Mengundurkan Diri</label>
        </div>       
    </div>
    @if(session('success'))
        <div class="bg-green-200 text-green-800 p-2 mb-4 rounded-md mx-auto text-center">
            {{ session('success') }}
        </div>
    @endif
    <div class="flex justify-center px-5">   
        <!-- Next Button -->
        <a href="#" class="flex items-center justify-center px-4 h-10 ml-3 w-40 text-base font-medium text-white bg-amber-500 border-gray-300 rounded-lg hover:bg-amber-600 focus:ring-amber-400 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
            <button class="w-full">Next</button>
        </a> 
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