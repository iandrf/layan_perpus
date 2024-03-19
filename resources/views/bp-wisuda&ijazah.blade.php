<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bebas Pustaka-Wisuda & Ijazah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
    </style>
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
        
        <div class="ring-offset-2 ring-2 ring-offset-slate-50 dark:ring-offset-slate-900 rounded-lg bg-amber-600 shadow-inner grid justify-center mx-10 p-2">
            <p class="text-center ml-5 mb-5 text-base font-semibold text-black dark:text-black">Validasi Penyerahan Buku Sumbangan</p>
            <p class="text-justify ml-5 text-base font-normal text-black dark:text-black">LENGKAPI PERSYARATAN BEBAS PUSTAKA</p>
            <p class="text-justify ml-5 text-base font-normal text-black dark:text-black">DENGAN MELAKUKAN SUMBANGAN BUKU di</p>
            <p class="text-justify ml-5 text-base font-normal text-black dark:text-black">Link : </Link><a href="#" class="font-medium text-black dark:text-black hover:underline">Sumbangan Buku</a></p>
        </div>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
        <form method="post" action="/bebaspustaka"enctype="multipart/form-data">
            @csrf
            <div class="grid gap-6 p-5 md:grid-cols-1">
                <div>
                    <label for="judul_buku" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Judul Buku yang Disumbangkan</label>
                    <input name="judul_buku" type="text" id="judul_buku" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="(Hubungi petugas di No.WA 0855-1707-676 untuk mengetahui judul buku yang dapat disumbangkan)" required>
                </div>
                <div>
                    <label for="pengarang" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Pengarang</label>
                    <input name="pengarang" type="text" id="pengarang" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div>
                    <label for="tahun_terbit" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tahun Terbit</label>
                    <input name="tahun_terbit" type="text" id="tahun_terbit" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div> 
            </div>
            <div class="p-5">
                <div class="text-center">
                    <div class="p-3 mb-2">
                        <label for="bukti" class="mb-2 p-5 text-base font-semibold text-gray-900 dark:text-black">Bukti Tanda Terima Buku Sumbangan</label>
                    </div>
                    <div class="ring-offset-2 ring-2 ring-offset-slate-700 dark:ring-offset-slate-900 max-w-md mx-auto p-6 mb-7 bg-gray-400 dark:bg-gray-500 rounded-lg shadow-md justify-center">
                        <label class="block text-sm font-medium text-black dark:text-black mb-2" for="file">Upload file pdf/docs</label>
                        <input name="bukti_sumbangan" id="file" class="block w-full py-2 px-4 text-sm text-white dark:text-gray-300 border border-gray-300 rounded-lg cursor-pointer bg-gray-500 dark:bg-gray-500" id="multiple_files" type="file">
                    </div>
                    <div class="p-3 mb-2">
                        <label for="bukti" class="mb-2 p-5 text-base font-semibold text-gray-900 dark:text-black">Bukti Tanda Terima Karya Ilmiah</label>
                    </div>
                    <div class="ring-offset-2 ring-2 ring-offset-slate-700 dark:ring-offset-slate-900 max-w-md mx-auto p-6 mb-7 bg-gray-400 dark:bg-gray-500 rounded-lg shadow-md justify-center">
                        <label class="block text-sm font-medium text-black dark:text-black mb-2" for="file">Upload file pdf/docs</label>
                        <input name="bukti_karyailmiah" id="file" class="block w-full py-2 px-4 text-sm text-white dark:text-gray-300 border border-gray-300 rounded-lg cursor-pointer bg-gray-500 dark:bg-gray-500" id="multiple_files" type="file">
                    </div>
                </div>
            </div>
            <div class="flex justify-center px-5">
                <!-- Previous Button -->
                <button type="submit" class="flex items-center justify-center px-4 h-10 w-40 text-base font-medium text-white bg-amber-500 hover:bg-amber-600 focus:ring-4 focus:outline-none focus:ring-amber-400 rounded-lg py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
                    Previous
                </button>        
            
                <!-- Next Button -->
                <button type="submit" class="flex items-center justify-center px-4 h-10 ml-3 w-40 text-base font-medium text-white bg-amber-500 border-gray-300 rounded-lg hover:bg-amber-600 focus:ring-amber-400 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">
                    Next
                </button>
            </div>
        </form>
        <footer class="bg-white shadow mt-5 dark:bg-blue-950">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-white">© 2023 <a>Layanan Perpustakaan Univeristas Widyatama</a>. All Rights Reserved.</span>
                <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0"></ul>
            </div>
        </footer>
</body>
</html>