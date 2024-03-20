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
        <div class=" grid justify-center mx-10 p-2">
            <h2 class="text-center text-2xl font-semibold text-black dark:text-black">Validasi Transaksi</h1>
        </div>
        <hr class="w-48 h-1 mx-auto my-4 bg-gray-600 border-0 rounded md:my-10 dark:bg-gray-700">
        <form action="/bebaspustaka/{{session('pustaka_id')}}" method="post" >
            @method('put')
            @csrf
            <div class="grid gap-6 mb-6 p-5 md:grid-cols-1">
                <div>
                    <label for="petugas" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Petugas yang Menerima</label>                
                    <div class="flex mb-4">
                        <label for="Petugas_yang_menerima" class="sr-only">Petugas yang Menerima</label>
                        <select name="petugas_id" id="Petugas" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                            <option hidden>Petugas yang Menerima</option>
                            @foreach ($petugas as $petugas)
                                <option value="{{$petugas->id}}">
                                    {{$petugas->Nama}}
                                </option> 
                            @endforeach
                        </select>
                    </div>
                </div> 
                <div>
                    <label for="tgl_pengajuan" class="kotak mb-2 text-sm font-medium text-gray-900 dark:text-black">Tanggal Pengajuan Bebas Pustaka</label>
                    <input name="tgl_pengajuan" type="date" id="tahun_terbit" class="bg-gray-400 border border-gray-800 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 placeholder-black dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required>
                </div>
                <div class="flex justify-center px-5 mt-5">
                    <button type="submit" class="flex items-center justify-center px-4 h-10 ml-3 w-40 text-base font-medium text-white bg-amber-500 border-gray-300 rounded-lg hover:bg-amber-600 focus:ring-amber-400 py-2.5 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-blue-800">Submit</button>           
                </div>
            </div>
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