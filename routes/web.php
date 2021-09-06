<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\Admin\DashboardController as AdminDashboard;

use App\Http\Controllers\Member\LoginController as MemberLogin;
use App\Http\Controllers\Member\DashboardController as MemberDashboard;

use App\Http\Controllers\CommonController;

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

Route::get('/admin_login', [AdminLogin::class, 'adminLogin'])->name('admin_login');
Route::post('/admin_logged_in', [AdminLogin::class, 'authenticate']);
Route::post('/admin_logout', [AdminLogin::class, 'adminLogout'])->name('admin_logout');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->prefix('admin')->group(function () {
    
    Route::get('/', function () {
        return redirect()->action([AdminDashboard::class, 'index']);
    });
    Route::get('/dashboard', [AdminDashboard::class, 'index']);
    
    Route::post('/upload-image', [CommonController::class, 'imageUpload']);
});

Route::get('/', function () {
    if (!empty(Auth::user()) && Auth::user()->is_admin) {
        return redirect('admin/dashboard');
    } else if (!empty(Auth::user()) && Auth::user()->is_admin == 0) {
        return redirect('user/dashboard');
    } else {
        return redirect('dashboard');
    }
});
Route::get('/cart', [MemberDashboard::class, 'cart']);
Route::get('/checkout', [MemberDashboard::class, 'checkout']);
Route::get('/membership', [MemberDashboard::class, 'membership']);
Route::get('/aboutus', [MemberDashboard::class, 'aboutus']);
Route::get('/visit_store', [MemberDashboard::class, 'visit_store']);
Route::get('/upcoming_matches', [MemberDashboard::class, 'upcoming_matches']);
Route::get('/dashboard', [MemberDashboard::class, 'index']);

Route::get('/member_login', [MemberLogin::class, 'memberLogin'])->name('member_login');
Route::post('/member_logged_in', [MemberLogin::class, 'authenticate']);
Route::post('/member_logout', [MemberLogin::class, 'memberLogout'])->name('member_logout');

Route::middleware(['auth:sanctum', 'verified', 'user'])->prefix('user')->group(function () {    
    Route::get('/', [MemberDashboard::class, 'index']);
    Route::get('/dashboard', [MemberDashboard::class, 'index']);
});