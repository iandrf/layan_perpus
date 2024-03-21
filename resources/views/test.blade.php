<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
   <!-- {{-- Icon --}} -->
      <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- {{-- Font --}} -->
      <link
         href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
         rel="stylesheet">

   <!-- {{-- Style --}} -->
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
   <!-- {{-- end style --}} -->

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
                           @auth('admin')
            <h1 class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-sm text-white">Welcome Admin!</h1>
            <!-- Tampilkan konten untuk admin -->
        @else
            <h1 class="border-b-2 border-transparent transition border-opacity-0 hover:border-opacity-100 hover:border-white duration-500 text-sm text-white">Welcome User!</h1>
            <!-- Tampilkan konten untuk user -->
        @endauth
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
      
               <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
                     <div class="inline-flex rounded-full shadow">
                           <div href="#"
                              class="inline-flex items-center px-3 py-1 text-base text-gray-900 bg-white border border-transparent rounded-full cursor-pointer font-base hover:bg-black ">
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
         
    <input type="text" id="username" name="username" class="p-2 rounded-xl border @error('username') is-invalid @enderror" 
    placeholder="username" autofocus required value="{{ old('username') }}">
    @error('username')
        <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror

                
                    <input type="password" id="password" name="password" class="p-2 rounded-xl border w-full" 
                    required placeholder="password">
                     <i class="bi bi-eye-slash" id="togglePassword"></i>
                
               
            
                 <button class="bg-gradient-to-tr from-slate-400 to-blue-200 via-gray-500 rounded-xl text-white py-2 hover:scale-105 duration-100">Login</button>
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

   <!-- {{-- welcome text --}} -->
      <section class="text-gray-600 body-font mt-20">
         <div class="container mx-auto">
               <div class="flex flex-wrap w-full mb-7 flex-col items-center text-center">
                  <p id="target-section0" class="lg:w-1/2 w-full leading-relaxed text-gray-500 mt-12">Selamat datang di</p>
                  <h1 class="sm:text-4xl text-2xl font-medium title-font mb-0 text-gray-900">Widyatama Information Online System</h1>
               </div>
      </section>
   <!-- {{-- end welcome text --}} -->

   <!-- {{-- carousel --}} -->
      <section class="container mx-auto px-0 mt-16">
         <div class="container mx-auto px-10">
               <div  class="relative">
                  <ul id="slider">
                     <li class="h-[50vh] relative">
                           <img class="h-full w-full object-cover" src="img/bg2.jpg" alt="bg1">
                           <div class="absolute top-0 left-0 h-full w-full flex">
                              <h2 class="text-4xl font-bold text-white my-auto w-full text-center px-20"></h2>
                           </div>
                     </li>
                     <li class="h-[50vh] relative hidden">
                           <img class="h-full w-full object-cover" src="img/bg1.jpg" alt="bg1">
                           <div class="absolute top-0 left-0 h-full w-full flex">
                              <h2 class="text-4xl font-bold text-white my-auto w-full text-center px-20"></h2>
                           </div>
                     </li>
                     <li class="h-[50vh] relative hidden">
                           <img class="h-full w-full object-cover" src="img/bg3.jpg" alt="bg1">
                           <div class="absolute top-0 left-0 h-full w-full flex">
                              <h2 class="text-4xl font-bold text-white my-auto w-full text-center px-20"></h2>
                           </div>
                     </li>
                  </ul>
               
               </div>
         </div>
      </section>

      <!-- {{-- script carousel --}} -->
         <script>
            let currentSlideID = 1;
            const sliderElement = document.getElementById('slider');
            const slides = sliderElement.getElementsByTagName('li');
            const totalSlides = slides.length;
            let slideInterval;
               function next() {
                     if (currentSlideID < totalSlides) {
                        currentSlideID++;
                        showSlide();
                     } else {
                        currentSlideID = 1;
                        showSlide();
                     }
               }

               function prev() {
                     if (currentSlideID > 1) {
                        currentSlideID--;
                        showSlide();
                     } else {
                        currentSlideID = totalSlides;
                        showSlide();
                     }
               }

               function showSlide() {
                     for (let index = 0; index < totalSlides; index++) {
                        const slide = slides[index];
                        if (currentSlideID === index + 1) {
                           slide.classList.remove('hidden');
                        } else {
                           slide.classList.add('hidden');
                        }
                     }
               }


            slideInterval = setInterval(next, 5000);
            sliderElement.addEventListener('mouseenter', () => {
                  clearInterval(slideInterval);
            });
            sliderElement.addEventListener('mouseleave', () => {
                  slideInterval = setInterval(next, 3000);
            });
            showSlide();

             // Fungsi untuk menangani klik tombol
    
         </script>
         <script>
            function goToSection0() {
        // Mendapatkan elemen target
        var targetElement = $("#target-section0");
        
        // Menentukan posisi target yang tepat di bawah bagian atas layar
        var newPosition = targetElement.offset().top - 100; // Ubah 50 ke offset yang Anda inginkan
        
        // Animasi scroll ke posisi baru
        $('html, body').animate({
            scrollTop: newPosition
        }, 800); // Mengatur durasi animasi (opsional, di sini 800 milidetik)
    }
    // Fungsi untuk menangani klik tombol
    function goToSection() {
        // Mendapatkan elemen target
        var targetElement = $("#target-section");
        
        // Menentukan posisi target yang tepat di bawah bagian atas layar
        var newPosition = targetElement.offset().top - 100; // Ubah 50 ke offset yang Anda inginkan
        
        // Animasi scroll ke posisi baru
        $('html, body').animate({
            scrollTop: newPosition
        }, 800); // Mengatur durasi animasi (opsional, di sini 800 milidetik)
    }

    function goToSection2() {
        // Mendapatkan elemen target
        var targetElement = $("#target-section2");
        
        // Menentukan posisi target yang tepat di bawah bagian atas layar
        var newPosition = targetElement.offset().top - 100; // Ubah 50 ke offset yang Anda inginkan
        
        // Animasi scroll ke posisi baru
        $('html, body').animate({
            scrollTop: newPosition
        }, 800); // Mengatur durasi animasi (opsional, di sini 800 milidetik)
    }
</script>


      <!-- {{-- end script carousel --}} -->
   <!-- {{-- end carousel --}} -->

   <!-- {{-- arrows --}} -->
      <section  >
         <div class="container mx-auto mt-32">
            <div class="flex flex-col items-center justify-center">
               <h2 id="target-section" class="sm:text-3xl font-medium text-wrap">
                     <span class="text-blue-800 text-4xl">Layanan</span>
                     <span class="text-black"> Kami</span>
               </h2>
               </div>
         </div>
         <!-- tombol panah ke bawah -->
         <div class="flex justify-center mt-3">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                  class="w-6 h-6 text-gray-900 animate-bounce">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                  </path>
               </svg>
         </div>
      </section>
   <!-- {{-- end arrows --}} -->

   <!-- {{-- Card layanan kami --}} -->
      <section class="container mx-auto  mt-8 mb-0">
         <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-7">

           <a href = '/bp'> <div  class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl rounded-lg sm:max-w-sm sm:rounded-lg sm:px-10">
               <span  onclick="window.location='/bp'" class="absolute top-10 z-0 h-20 w-20 rounded-full bg-custom-dark transition-all duration-300 group-hover:scale-[10]" ></span>
               <div class="relative z-10 mx-auto max-w-md">
                     <span class="grid h-20 w-20 place-items-center rounded-full bg-custom-dark transition-all duration-300 group-hover:bg-custom-dark">
                        <img class="w-auto h-8 sm:h-11" src="image/bg.png">
                     </span>
                     <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <h2 class="text-lg font-medium title-font mb-2">Bebas Pustaka</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus cum aspernatur, dignissimos id,.</p>
                     </div>
               </div>
            </div></a>

          <a href = '/kp'>  <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl rounded-lg sm:max-w-sm sm:rounded-lg sm:px-10">
               <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-custom-dark transition-all duration-300 group-hover:scale-[10]"></span>
               <div class="relative z-10 mx-auto max-w-md">
                     <span class="grid h-20 w-20 place-items-center rounded-full bg-custom-dark transition-all duration-300 group-hover:bg-custom-dark">
                        <img class="w-auto h-8 sm:h-11" src="image/bg.png">
                     </span>
                     <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <h2 class="text-lg font-medium title-font mb-2">Penyerahan KP</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus cum aspernatur, dignissimos id,.</p>
                     </div>
               </div>
            </div></a>

           <a href = '/validasi-ta' > <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl rounded-lg sm:max-w-sm sm:rounded-lg sm:px-10">
               <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-custom-dark transition-all duration-300 group-hover:scale-[10]"></span>
               <div class="relative z-10 mx-auto max-w-md">
                     <span class="grid h-20 w-20 place-items-center rounded-full bg-custom-dark transition-all duration-300 group-hover:bg-custom-dark">
                        <img class="w-auto h-8 sm:h-11" src="image/bg.png">
                     </span>
                     <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <h2 class="text-lg font-medium title-font mb-2">Validasi TA</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus cum aspernatur, dignissimos id,.</p>
                     </div>
               </div>
            </div></a>

           <a href = '/sumbangan-buku'> <div class="group relative cursor-pointer overflow-hidden bg-white px-6 pt-10 pb-8 shadow-xl ring-1 ring-gray-900/5 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl rounded-lg sm:max-w-sm sm:rounded-lg sm:px-10">
               <span class="absolute top-10 z-0 h-20 w-20 rounded-full bg-custom-dark transition-all duration-300 group-hover:scale-[10]"></span>
               <div class="relative z-10 mx-auto max-w-md">
                     <span class="grid h-20 w-20 place-items-center rounded-full bg-custom-dark transition-all duration-300 group-hover:bg-custom-dark">
                        <img class="w-auto h-8 sm:h-11" src="image/bg.png">
                     </span>
                     <div class="space-y-6 pt-5 text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-white/90">
                        <h2 class="text-lg font-medium title-font mb-2">Sumbangan buku</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus cum aspernatur, dignissimos id,.</p>
                     </div>
               </div>
            </div>
         </div></a>
      </section>
   <!-- {{-- end card layanan kami --}} -->

   <!-- {{-- text buku terbaru --}} -->
      <section>
         <div class="container mx-auto mb-10 mt-80">
         <div class="flex flex-col items-center justify-center">
            <h2 id="target-section2" class="sm:text-3xl font-medium text-wrap">
                  <span class="text-blue-800 text-4xl">Buku</span>
                  <span class="text-black"> Terbaru</span>
            </h2>
            <h2 class="sm:text-2xl font-medium text-wrap mt-4 text-blue-900">
               Buku Terbaru Di Perpustakaan Widyatama
            </h2>
         </div>
      </div>
      </section>
   <!-- {{-- end text buku terbaru --}} -->

   <!-- {{-- card buku baru --}} -->
      <section class="md:h-full flex items-center text-gray-600">
         <div class="mx-auto flex flex-wrap -m-4">
               <!-- card1 -->
               <a href="">
                  <div class="p-4 sm:w-1/2 lg:w-1/4">
                     <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                           <img class="h-auto w-full object-cover object-center"
                              src="img/laskar-pelangi.jpg" alt="blog">
                           <div class="p-6 hover:bg-violet-950 hover:text-white transition duration-300 ease-in">
                              <h2 class="text-base font-medium text-indigo-300 mb-1">October 29, 2021</h2>
                              <h1 class="text-2xl font-semibold mb-3">Laskar Pelangi</h1>
                              <p class="leading-relaxed mb-3">Novel Laskar Pelangi adalah cerita tentang bagiamana kesepuluh 
                                 anak-anak miskin melayu ini menjalani hidup di tengah segala keterbatasan, namun tetap berani bermimpi. Kisah mereka dipenuhi dengan 
                                 suka, duka, nestapa, dan tentu saja jenaka.
                              </p>
                                 <a href="" class="text-indigo-400">
                                    <p>Baca Selengkapnya</p>
                                 </a>
                              <div class="p-4 pt-3">
                           </div>
                           </div>
                     </div>
                  </div>
                  </a>
               <!-- endcard1 -->

               <!-- card2 -->
               <a href="">
                  <div class="p-4 sm:w-1/2 lg:w-1/4">
                     <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                           <img class="h-auto w-full object-cover object-center"
                              src="img/laskar-pelangi.jpg" alt="blog">
                           <div class="p-6 hover:bg-violet-950 hover:text-white transition duration-300 ease-in">
                              <h2 class="text-base font-medium text-indigo-300 mb-1">October 29, 2021</h2>
                              <h1 class="text-2xl font-semibold mb-3">Laskar Pelangi</h1>
                              <p class="leading-relaxed mb-3">Novel Laskar Pelangi adalah cerita tentang bagiamana kesepuluh 
                                 anak-anak miskin melayu ini menjalani hidup di tengah segala keterbatasan, namun tetap berani bermimpi. Kisah mereka dipenuhi dengan 
                                 suka, duka, nestapa, dan tentu saja jenaka.
                              </p>
                                 <a href="" class="text-indigo-400">
                                    <p>Baca Selengkapnya</p>
                                 </a>
                              <div class="p-4 pt-3">
                           </div>
                           </div>
                     </div>
                  </div>
               </a>
               <!-- endcard2 -->   
               
               <!-- card3 -->
               <a href="">
                  <div class="p-4 sm:w-1/2 lg:w-1/4">
                     <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                           <img class="h-auto w-full object-cover object-center"
                              src="img/laskar-pelangi.jpg" alt="blog">
                           <div class="p-6 hover:bg-violet-950 hover:text-white transition duration-300 ease-in">
                              <h2 class="text-base font-medium text-indigo-300 mb-1">October 29, 2021</h2>
                              <h1 class="text-2xl font-semibold mb-3">Laskar Pelangi</h1>
                              <p class="leading-relaxed mb-3">Novel Laskar Pelangi adalah cerita tentang bagiamana kesepuluh 
                                 anak-anak miskin melayu ini menjalani hidup di tengah segala keterbatasan, namun tetap berani bermimpi. Kisah mereka dipenuhi dengan 
                                 suka, duka, nestapa, dan tentu saja jenaka.
                              </p>
                                 <a href="" class="text-indigo-400">
                                    <p>Baca Selengkapnya</p>
                                 </a>
                              <div class="p-4 pt-3">
                           </div>
                           </div>
                     </div>
                  </div>
               </a>
               <!-- endcard3 -->

               <!-- card4 -->
               <a href="">
                  <div class="p-4 sm:w-1/2 lg:w-1/4">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                              <img class="h-auto w-full object-cover object-center"
                                 src="img/laskar-pelangi.jpg" alt="blog">
                              <div class="p-6 hover:bg-violet-950 hover:text-white transition duration-300 ease-in">
                                 <h2 class="text-base font-medium text-indigo-300 mb-1">October 29, 2021</h2>
                                 <h1 class="text-2xl font-semibold mb-3">Laskar Pelangi</h1>
                                 <p class="leading-relaxed mb-3">Novel Laskar Pelangi adalah cerita tentang bagiamana kesepuluh 
                                    anak-anak miskin melayu ini menjalani hidup di tengah segala keterbatasan, namun tetap berani bermimpi. Kisah mereka dipenuhi dengan 
                                    suka, duka, nestapa, dan tentu saja jenaka.
                                 </p>
                                    <a href="" class="text-indigo-400">
                                       <p>Baca Selengkapnya</p>
                                    </a>
                                 <div class="p-4 pt-3">
                              </div>
                              </div>
                        </div>
                     </div>
                  </a>
                  <!-- endcard4 -->
                  
                  </div>
            </div>
      </section>
   <!-- {{-- endcard buku baru --}} -->




   <!-- {{-- footer --}} -->
      <div class="relative bg-custom-dark mt-96">
         <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
            <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
            
            </div>
         </div>
      </div>
   <!-- {{-- end footer --}} -->


</body>



</html>
