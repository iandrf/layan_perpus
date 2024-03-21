<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="node_modules/feather-icons/dist/feather.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <title>Dashboard KP</title>
</head>
<body>
    
<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
       <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
 </button>
 
 <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
       <a href="#" class="flex items-center pl-2.5 mb-5">
          <img src="/image/bg1.png" class="h-6 mr-3 sm:h-7" alt="Widyatama Logo"/>
          <span class="self-center text-sm font-semibold whitespace-nowrap dark:text-white">Layanan Perpustakaan</span>
       </a>
       <ul class="space-y-2 font-medium">
            <li>
                <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                       <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                    </svg>
                    <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Dashboard</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                       <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <ul id="dropdown-example" class="hidden py-2 space-y-2">
                    <li>
                       <a href="/validasita" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Tesis/Jurnal/LTA</a>
                    </li>
                    <li>
                       <a href="/bebaspustaka" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Bebas Pustaka</a>
                    </li>
                    <li>
                       <a href="/sumbanganb" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Sumbangan Buku</a>
                    </li>
                </ul>
            </li>
          <form action="/logout" method="post">
            @csrf
             <button type="submit" href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                   <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                   <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                   <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                </svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Logout</span>
            </button>
          </form>
        </ul>
    </div>
 </aside>
 
<div class="flex items-center justify-around pb-4 bg-white dark:bg-gray-800 p-4 sm:ml-64">
    <div class="navbar-nav flex n">
        <label for="table-search" class="sr-only ">Search</label>
        <div class="relative">
            <form action="/penyerahankp/search" class="form-inline" method="post">
            @csrf
            <input type="search" name="search" id="table-search-name" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for name">
                <div class="fixed absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </form>
        </div>
    </div>
</div>
    <form action="/DashboardKP" method="post">
        @csrf
        <div class="p-4 sm:ml-64 ">
            <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">      
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="sticky left-0 top-0 z-10 bg-gray-200 px-1 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-4 py-2 bg-gray-100">
                                    Nama Lengkap
                                </th>
                                <th scope="col" class="px-4 py-2 bg-gray-100">
                                    Email
                                </th>
                                <th scope="col" class="px-4 py-2 bg-gray-100">
                                    Npm
                                </th> 
                                <th scope="col" class="px-4 py-2 bg-gray-100">
                                    Program Studi
                                </th>
                                <th scope="col" class="px-4 py-2 bg-gray-100">
                                    Judul Laporan Kerja Praktek
                                </th>
                                <th scope="col" class="px-4 py-2 bg-gray-100">
                                    Tanggal Penyerahan
                                </th>
                                <th scope="col" class="px-4 py-2 bg-gray-100">
                                    Petugas Yang Menerima
                                </th>
                            </tr>
                        </thead>
                        <tbody>   
                            @if(isset($DashboardKP) && !$DashboardKP->isEmpty())
                                @foreach ( $DashboardKP as $penyerhanKP )
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                        <td class="sticky left-0 top-0 z-10 bg-gray-100 px-1 py-3">
                                            {{ ($DashboardKP->currentPage() - 1) * $DashboardKP->perPage() + $loop->index + 1 }}
                                        </td>
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{$penyerhanKP->Mahasiswa->Nama}}
                                        </th>
                                        <td class="px-4 py-2">
                                            {{$penyerhanKP->Mahasiswa->Email}}
                                        </td>
                                        <td class="px-4 py-2">
                                            {{$penyerhanKP->Mahasiswa->NPM}}
                                        </td>
                                        <td class="px-4 py-2">
                                            {{$penyerhanKP->Mahasiswa->ProgramStudi}}
                                        </td>
                                        <td class="px-4 py-2">
                                            {{$penyerhanKP->Judul_laporanKP}}
                                        </td>
                                        <td class="px-4 py-2">
                                            {{$penyerhanKP->Tanggal_penyerahan}}
                                        </td>
                                        <td class="px-4 py-2">
                                            {{$penyerhanKP->petugas->Nama}}
                                        </td>
                                    </tr>
<<<<<<< HEAD
=======
                                    <div class="flex items-center ml-4">
                    {{ $DashboardKP->links('pagination::tailwind') }}
                </div>     
>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033
                                @endforeach
                            @else
                                <p class="text-red-500 pb-5">Hasil Pencarian Tidak Ditemukan.</p>
                            @endif
                        </tbody> 
                    </table>
                </div>             
<<<<<<< HEAD
                <div class="flex items-center ml-4">
                    {{ $DashboardKP->links('pagination::tailwind') }}
                </div>              
=======
                      
>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033
                </div>
            </div>
        </div>
    </form>
    
</div>


</body>
</html>