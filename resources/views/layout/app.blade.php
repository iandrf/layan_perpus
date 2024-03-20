<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
   {{-- Icon --}}
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   {{-- Font --}}
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet">

   {{-- Style --}}
      <style>
         [data-carousel-prev] {
               display: none !important;
         }

         [data-carousel-next] {
               display: none !important;
         }
         .modal {
               display: none;
               position: fixed;
               z-index: 999;
               left: 0;
               top: 0;
               width: 100%;
               height: 100%;
               overflow: auto;
               background-color: rgba(0, 0, 0, 0.4);
               padding-top: 60px;
         }

         .modal-content {
               background-color: #fefefe;
               margin: 5% auto;
               padding: 20px;
               border: 1px solid #888;
               width: 80%;
         }

         .close {
               display: none;
         }

         .bg-custom-dark {
               background-color: #17082d;
         }
      </style>
   {{-- end style --}}

</head>
<body class="font-[Poppins] bg-white">
{{-- navbar --}}
      <div class="fixed z-50 top-0 px-4 mx-auto w-full sm:px-6 bg-custom-dark font-Poppins">
         <div class="relative pt-4 sm:pb-6">
            <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
               <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                  <div class="flex items-center justify-between w-full md:w-auto">
                     <a href="javascript:void(0)" onclick="goToSection0()">
                        <img class="w-auto h-8 sm:h-11" src="image/bg.png">
                     </a>
                     <a href="javascript:void(0)" onclick="goToSection0()" class="ml-4">
                        <div>
                           <h2 class="text-white text-sm font-normal">Widyatama Information</h2>
                           <h2 class="text-white text-sm font-thin">Online System</h2>
                        </div>
                     </a>
                     <div class="ml-8">
                        <h1 class="font-thin text-white ">|</h1>
                        <h1 class="font-thin text-white -mb-2.5 -mt-2.5">|</h1>
                        <h1 class="font-thin text-white">|</h1>
                     </div>
                     <div class="hidden md:flex md:space-x-10 list-none ml-8">
                        <ul class="flex space-x-10 list-none">
                           <li>
                              <a href="javascript:void(0)" onclick="goToSection()" class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-sm text-white" >Layanan Kami</a>
                           </li>
                           <li>
                              <a href="javascript:void(0)" onclick="goToSection2()" class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-sm text-white" target="">Buku Terbaru</a>
                           </li>
                           <li>
                           @if (Auth::check())
    @if (Auth::user()->role === 'admin')
        <a class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-sm text-white">Welcome Admin!</a>
        <!-- Tampilkan konten khusus admin -->
    @elseif (Auth::user()->role === 'user')
        <a class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-sm text-white">Welcome User!</a>
        <!-- Tampilkan pesan untuk pengguna yang telah login sebagai user -->
    @endif
@else
    <a class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-sm text-white">Anda Belum Login</a>
    <!-- Tampilkan pesan untuk pengguna yang belum login -->
@endif

  

       </li>
                        </ul>
                     </div>
                  </div>
               </div>
      
               <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                   
                     @if (Auth::check())
                     @if (Auth::user()->role === 'admin')
                     <a href="" class="text-gray-400 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                     </a>
                     <a href="" class="text-gray-400 mr-2.5 ml-1 text-13px">
                        Admin Dashboard
                     </a>

                    @endif    @endif 
                    <div class="inline-flex rounded-full shadow">
                    <div class="inline-flex items-center px-3 py-1 text-base text-gray-900 bg-white border border-transparent rounded-full cursor-pointer font-base hover:bg-black ">
                  @auth
                    
                          
                              <form action="/logout" method="post">
                                 @csrf
                                    <button type="submit"class="border-transparent transition border-opacity-0 hover:border-opacity-100 text-15px font-medium hover:text-white">Logout</button>
                              </form>
                          
                        </div>
                  @else
                  
                     
                     <button id="loginBtn" class="border-transparent transition border-opacity-0 hover:border-opacity-100 text-15px font-medium hover:text-white">Login</button>
                     </div>
                     </div>
                  </div>
            <ion-icon onclick="onToggleMenu(this)" name="menu-outline" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                  
                     <div id="myModal" class="modal">
      <div class="modal-content bg-gray-50 flex rounded-2xl shadow-xl max-w-3xl p-5">
         {{-- login --}}
            <div class="md:w-1/2 px-8 md:px-16 mt-8">
               <h2 class="font-bold text-3xl">Login</h2>
               @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('seccess') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif 

        @if (session('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif

            <form action = "{{ route('actionlogin') }}" method="post">
               @csrf
               <div class="flex flex-col gap-4 mt-9">
               
               <input type="text" id="username" name="username" class="p-2 rounded-xl border @error('username') is-invalid @enderror" placeholder="username" autofocus required value="{{ old('username') }}">
                    @error('username')
                        <span class="text-red-500 text-xs">{{ $message }}</span>
                        @enderror
                        
                        <div class="relative">
    <input type="password" id="password" name="password" class="p-2 rounded-xl border w-full @error('password') is-invalid @enderror" required placeholder="password">
    <button type="button" id="togglePassword" class="absolute top-0 end-0 p-3.5 rounded-xl dark:focus:outline-none dark:focus:ring-gray-600">
      <svg class="flex-shrink-0 size-3.5 text-gray-400 dark:text-neutral-600" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"/>
        <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"/>
        <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"/>
        <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"/>
        <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
        <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"/>
        </svg>
    </button>
</div>
                 <button type="submit" class="bg-gradient-to-tr from-slate-400 to-blue-200 via-gray-500 rounded-xl text-white py-2 hover:scale-105 duration-100">Login</button>
                 </div>
                  <div class="text-xs ml-auto hover:text-gray-300 mt-4"><a href="">Forgot your password?</a></div>
                  </form>
                  

               <div class="mt-6 grid grid-cols-3 items-center text-gray-400">
                  <hr class="border-gray-400">
                  <p class="text-center text-sm">OR</p>
                  <hr class="border-gray-400">
               </div>

               <button
                  class="bg-white border py-2 w-full rounded-xl mt-5 flex justify-center items-center text-sm hover:scale-105 duration-300 text-[#002D74]">
                  <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="25px">
                     <path fill="#FFC107" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z" />
                     <path fill="#FF3D00" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z" />
                     <path fill="#4CAF50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z" />
                     <path fill="#1976D2" d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z" />
                  </svg>
                  Login with Google
                  </button>
            </div>
            <div class="md:block hidden w-1/2 ">
               <img class="rounded-2xl " src="image/library.jpg" alt="Logo Widyatama">
            </div>
         {{-- End Login --}}

      <span class="close">&times;</span>
      </div>
   </div>
                  @endauth
               </ul>
         </ul>
      </div>
   </div>
   </div>
      </div>
   <script>
         var modal = document.getElementById("myModal");
         var btn = document.getElementById("loginBtn");
         var span = document.getElementsByClassName("close")[0];
         btn.onclick = function() {
               modal.style.display = "block";
         }
         span.onclick = function() {
         modal.style.display = "none";
         }
         window.onclick = function(event) {
            if (event.target == modal) {
               modal.style.display = "none";
            }
         }
      </script>

   <script>  
    document.getElementById('togglePassword').addEventListener('click', function() {
    var passwordInput = document.getElementById('password');
    var activeBlockPath = document.querySelector('.hs-password-active\\:block'); // Memilih elemen <path> dengan kelas 'hs-password-active:block'
    var hiddenPath = document.querySelector('.hs-password-active\\.hidden'); // Memilih elemen <path> dengan kelas 'hs-password-active:hidden'
    var iconCircle = document.querySelector('circle');
    var iconLine = document.querySelector('line');

    if (passwordInput.getAttribute('type') === 'password') {
        passwordInput.setAttribute('type', 'text');
       
        activeBlockPath.classList.remove('hidden');
        iconCircle.classList.remove('hidden');
        iconLine.classList.add('hidden'); // Menyembunyikan elemen <line>
       
    } else {
        passwordInput.setAttribute('type', 'password');
        activeBlockPath.classList.add('hidden');
        iconCircle.classList.add('hidden');
        iconLine.classList.remove('hidden');
    }
});

   </script>