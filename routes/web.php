<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// front end
Route::get('/', [FrontendController::class, 'index']);
Route::get('/aboutus', [FrontendController::class, 'aboutus']);
Route::get('/cyberSecurity', [FrontendController::class, 'cyberSecurity']);
Route::get('/cyberStrategy', [FrontendController::class, 'cyberStrategy']);
Route::get('/network-detective', [FrontendController::class, 'network_detective']);
Route::get('/partner', [FrontendController::class, 'partner']);
Route::get('/previous-experience', [FrontendController::class, 'previous_experience']);
Route::get('/products-video', [FrontendController::class, 'products_video']);
Route::get('/products', [FrontendController::class, 'products']);
Route::get('/seminar', [FrontendController::class, 'seminar']);
Route::get('/services', [FrontendController::class, 'services']);
Route::get('/training', [FrontendController::class, 'training']);
Route::get('/vpentest', [FrontendController::class, 'vpentest']);
Route::get('/vulnerability-scanner', [FrontendController::class, 'vulnerability_scanner']);
Route::get('/contact', [FrontendController::class, 'contact']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/dashboard', [HomeController::class, 'dashboard']);


// Route::get('contact/create', [HomeController::class, 'create'])->name('user.create');
Route::post('contact/create', [HomeController::class, 'store'])->name('contact/create');

// attendance
Route::get('/allusers',[AdminController::class,'allusers']);
Route::get('/delete_user/{id}',[AdminController::class,'delete_user']);
Route::get('/alltendance_delete/{id}',[AdminController::class,'alltendance_delete']);

// attendance start
Route::post('/attendance',[AdminController::class,'attendance']);
Route::get('/all_attendance',[AdminController::class,'all_attendance']);
