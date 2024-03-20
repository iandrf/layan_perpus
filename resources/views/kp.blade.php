<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan Laporan Kerja Praktek</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="border-gray-50 bg-gradient-to-b from-blue-600 to-white dark:border-gray-500">

<!-- Navbar Start -->
<nav class="border-gray-50 bg-gradient-to-b from-blue-600 to-white dark:border-gray-700">
    <div class="flex flex-auto items-center justify-between m-0 p-6">
        <a href="#" class="flex place-items-center">
            <img src="/image/logoutama.png" class="Logo h-12 mr-1" alt="Widyatama Logo" />
            <div class="self-baseline mt-2 text-base font-semibold whitespace-nowrap dark:text-black">Widyatama Information</div>
            <div class="self-end -ml-36 text-base font-semibold whitespace-nowrap dark:text-black">Online System</div>
            <a href="/Home" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">Home</a>
        </a>
    </div>


<h1 class="p-5 text-3xl font-semibold text-gray-900 dark:text-black">Penyerahan Laporan Kerja Praktek</h1><br>
<br>

<!-- Input Field -->
<form action="/penyerahankp" method="post">
  @csrf
   <div class="grid gap-6 mb-0 p-5 md:grid-cols-2 px-5">
        <div>
           <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Email</label>
           <input name="email" type="text" id="email" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="example@widyatama.ac.id" required>
        </div>
        <div>
           <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Nama Lengkap</label>
           <input name="nama" type="text" id="nama" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required>
        </div>
        <div>
           <label for="npm" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">NPM</label>
           <input name="npm"type="tel" id="npm" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="06201010**" required>
        </div>
        <div>
            <label for="program_studi" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Program Studi</label>
            <div class="flex">
                <label for="program_studi" class="sr-only">Program Studi</label>
                <select name="program_studi" id="program_studi" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
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
           <label for="judul_laporan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Judul Laporan Kerja Praktek</label>
           <input name="judul_laporanKP"type="text" id="judul" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
       </div> 
       <div>
           <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-900">Tanggal Penyerahan</label>
           <input name="tanggal"type="date" id="tanggal" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="DD/MM/YY" required>
       </div> 
   </div>

    <div class="px-5">
        <label for="petugas" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Petugas yang Menerima</label>                
        <div class="flex">
            <label for="Petugas_yang_menerima" class="sr-only">Petugas yang Menerima</label>
            <select name="petugas_id" id="Petugas" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option hidden>Petugas yang Menerima</option>
                @foreach ($petugas as $petugas)
                    <option value="{{$petugas->id}}">
                        {{$petugas->Nama}}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
  <br>
  <div class="flex justify-center px-5">
    <button type="submit" class="text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">Submit</button>
  </div>
</form>
<!-- Footer -->
<footer class="bg-blue-950 shadow mt-10 dark:bg-blue-950">
    <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
        <span class="text-sm text-white sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
        <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
    </div>
</footer>

</body>
</html>