<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BebasPustakaController;
use App\Http\Controllers\ValidasiTAController;
use App\Http\Controllers\PenyerahanKPController;
use App\Http\Controllers\SumbanganBukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\FileTAController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardKPController;
use App\Models\Petugas;
<<<<<<< HEAD
use App\Http\Controllers\ProductController;


=======
use App\Http\Controllers\PostController;
>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< HEAD

=======
Route::get('/', function () {
    $postbukus = Postbuku::latest()->paginate(4);
    return view('home',[
        'postbukus'=>$postbukus,
    ]);
});

Route::get('/test', function(){
    return view ('test');
});
>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033

Route::get('/kp', function () {
    $petugas = Petugas::all();
    return view('kp', [
        'petugas'=>$petugas,
    ]);
});
Route::get('/bp', function () {
    return view('bebaspustaka');
});
Route::get('/bp-cuti&undur', function () {
    return view('bp-cuti&undur');
});
Route::get('/bp-transaksi', function () { 
    $petugas = Petugas::all();
    return view('bp-transaksi', [
        'petugas'=>$petugas,
    ]);
});
Route::get('/bp-wisuda&ijazah', function () {
    return view('bp-wisuda&ijazah');
});

Route::get('/validasi-ta', function () {
    return view('validasi-ta');
});

Route::get('/sumbangan-buku', function () {
    $petugas = Petugas::all();
    return view('sumbangan-buku', [
        'petugas'=>$petugas,
    ]);
});

<<<<<<< HEAD
Route::get('/Login-admin', function () {
    return view('Login-admin');
});
=======
Route::get('/Login',  function () {
    $postbukus = Postbuku::latest()->paginate(4);
    return view('home',[
        'postbukus'=>$postbukus,
    ]);
});

>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033
Route::get('/admin-lta', function () {
    return view('admin-lta');
});
Route::get('/admin-sumbanganbuku', function () {
    return view('admin-sumbanganbuku');
});
Route::get('/admin-user', function () {
    return view('admin-user');
});
Route::get('/admin-bebaspustaka', function () {
    return view('admin-bebaspustaka');
});
Route::get('/admin-kp', function () {
    return view('admin-kp');
});
<<<<<<< HEAD
Route::get('/products', [ProductController::class, 'index']);



=======
Route::get('/postb', function () {
    return view('postbuku');
});

Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);
>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033
Route::resource('/mahasiswa', MahasiswaController::class);

Route::resource('/penyerahankp', PenyerahanKPController::class);
Route::post('penyerahankp/search', [PenyerahanKPController::class, 'search'])->name('penyerahankp.search');

route::resource('/bebaspustaka', BebasPustakaController::class);
Route::post('bebaspustaka/search', [BebasPustakaController::class, 'search'])->name('bebaspustaka.search');

route::resource('/sumbanganb', SumbanganBukuController::class,);
Route::post('sumbanganb/search', [SumbanganBukuController::class, 'search'])->name('sumbanganb.search');

route::resource('/validasita', ValidasiTAController::class,);
Route::get('validasita/search', [ValidasiTAController::class, 'search'])->name('validasita.search');

<<<<<<< HEAD
route::get('/login', [LoginController::class, 'index'])->middleware('guest');

route::post('/login', [LoginController::class, 'authenticate']);

route::post('/logout', [LoginController::class, 'logout']);

Route::resource('/Home', HomeController::class);

route::post('/dashboard/search', [MahasiswaController::class, 'search']);

route::post('/dashboardKP/search', [MahasiswaController::class, 'search']);
// ->middleware('auth');


// view nav home
// <a class="nav-link" "{{($active === "categories") ? 'active' :''}}" href="/categories">categories</a>
=======
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('post', [PostController::class, 'store'])->name('post');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

route::post('/dashboard/search', [MahasiswaController::class, 'search']);

route::post('/dashboardKP/search', [MahasiswaController::class, 'search']);
>>>>>>> 38dd40ec4813f0e29cd7572812b3f23c9476c033
