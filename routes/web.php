<?php

use App\Http\Controllers\ChuyenMucController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\SanPhamController;
use App\Models\Homepage;
use Illuminate\Support\Facades\Route;

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
// Homepage
Route::get('/', [HomepageController::class, 'index']);
Route::get('/do-tap-nam', [HomepageController::class, 'dotapnam']);
Route::get('/do-nu', [HomepageController::class, 'donu']);
Route::get('/phu-kien', [HomepageController::class, 'phukien']);
Route::get('/chi-tiet-san-pham', [HomepageController::class, 'chitietsanpham']);
Route::get('/dang-nhap', [HomepageController::class, 'dangnhap']);
Route::get('/dang-ky', [HomepageController::class, 'dangky']);

// chuyên mục
Route::get('/admin/chuyen-muc-new', [ChuyenMucController::class, 'indexNew']);

// hiển thị data
Route::get('/admin/chuyen-muc/data', [ChuyenMucController::class, 'data']);

// đổi tình trạng
Route::post('/admin/chuyen-muc/status', [ChuyenMucController::class, 'status']);

// thêm mới
Route::post('/admin/chuyen-muc/create', [ChuyenMucController::class, 'store']);

// Xóa
Route::post('/admin/chuyen-muc/delete', [ChuyenMucController::class, 'destroy']);

// update
Route::post('/admin/chuyen-muc/edit', [ChuyenMucController::class, 'edit']);
Route::post('/admin/chuyen-muc/update', [ChuyenMucController::class, 'update']);

// slug
Route::post('/admin/chuyen-muc/check-slug', [ChuyenMucController::class, 'checkslug']);

// slup update
Route::post('/admin/chuyen-muc/check-slug-update', [ChuyenMucController::class, 'checkslugupdate']);

// tìm kiếm
Route::post('/admin/chuyen-muc/search', [ChuyenMucController::class, 'search']);


// sản phẩm
Route::get('/admin/san-pham-new', [SanPhamController::class, 'SanPhamNew']);

// hiển thị data
Route::get('/admin/san-pham/data', [SanPhamController::class, 'data']);

// đổi tình trạng
Route::post('/admin/san-pham/status', [SanPhamController::class, 'status']);

// tìm kiếm
Route::post('/admin/san-pham/search', [SanPhamController::class, 'search']);

// thêm mới
Route::post('/admin/san-pham/create', [SanPhamController::class, 'store']);

// xóa
Route::post('/admin/san-pham/delete', [SanPhamController::class, 'destroy']);

// cập nhật
Route::post('/admin/san-pham/edit', [SanPhamController::class, 'edit']);
Route::post('/admin/san-pham/update', [SanPhamController::class, 'update']);

// slug
Route::post('/admin/san-pham/check-slug', [SanPhamController::class, 'checkslug']);

// slug update
Route::post('/admin/san-pham/check-slug-update', [SanPhamController::class, 'checkSlugUpdate']);








