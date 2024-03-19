@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-white


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>WIOS</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

</body>
</html> 

<!-- 
<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
<title>WIOS</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body class="overflow-hidden">
  <header class="flex justify-center items-center h-16 bg-gray-400">
    <img src="img/bg.png" alt="Logo Widyatama" class="w-88 h-12 mr-2">
    <h1 class="text-black text-sm font-bold text">WIDYATAMA INFORMASI ONLINE SISTEM</h1>
  </header>
  <div class="bg-cover bg-center bg-no-repeat h-screen" style="background-image: url('img/perpustakaan.jpg');">
    <div class="flex justify-center items-center h-full">
      <div class="bg-white bg-opacity-50 rounded-lg shadow-lg p-16">
        <h2 class="text-2xl font-semibold mb-8 text-center">Login</h2>

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

        <form action="/login" method="post">
          @csrf
          <div class="mb-4">
            <label for="username" class="block text-gray-600 text-sm font-medium mb-6">
                <input type="username" id="Username" name="username" @error('username') is invalid @enderror class="form-control r w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" 
                placeholder="Username" autofocus required value="{{ old('username') }}">
            </label>
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
          </div>
            <div class="mb-4 relative">
                <label for="password" class="block text-gray-600 text-sm font-medium mb-4">
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" 
                    required placeholder="Password">
                </label>
                <span id="togglePassword" class="absolute top-1/2 right-4 transform -translate-y-1/2 cursor-pointer">
                    <i class="far fa-eye text-gray-500 hover:text-blue-500"></i>
                </span>
            </div>
          <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Login</button>
        </form>
      </div>
    </div>
  </div>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function() {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      this.querySelector('i').classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html> -->