<?php

use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\productController;
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

//Admin
Route::get('/admin', function () {
    return view('admin.home');
});
//product
Route::post('/admin/product/add', [productController::class, 'insert_product']);
Route::get('/admin/product/create', [productController::class, 'add_product']);
Route::get('/admin/product/list', [productController::class, 'list_product']);
Route::get('/admin/product/delete',[productController::class, 'delete_product']);



Route::get('/admin/order_list', function () {
    return view('admin.order_list');
});
Route::get('/admin/order_detail', function () {
    return view('admin.order_detail');
});
Route::post('/upload', [UploadController::class,'uploadImage']);
Route::post('/uploads', [UploadController::class,'uploadImages']);

Route::get('/', function () {
    return view('welcome');
});
