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

        <form action = "{{ route('actionlogin') }}" method="post">
          @csrf
          <div class="mb-4">
          <label for="username" class="block text-gray-600 text-sm font-medium mb-6">
    <input type="text" id="username" name="username" class="form-control w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 @error('username') is-invalid @enderror" 
    placeholder="username" autofocus required value="{{ old('username') }}">
    @error('username')
        <span class="text-red-500 text-xs">{{ $message }}</span>
    @enderror
</label>
          </div>
          <div class="mb-4 relative">
  <label for="password" class="block text-gray-600 text-sm font-medium mb-4">
    <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" required placeholder="password">
  
  <i class="bi bi-eye-slash" id="togglePassword"></i></label>
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
  this.classList.toggle('bi-eye-slash'); // Toggle icon class
    });
  </script>
</body>
</html>