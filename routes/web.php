<?php

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\product;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\checkOutController;
use App\Http\Controllers\managerController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\videoController;


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

// home area 
Route::get('/', [homeController::class, 'home'])->name('homePage');
// Route::get('/product/', [homeController::class, 'product'])->name('product');
// Route::get('/shop/', [homeController::class, 'shop'])->name('shop');
// Route::get('/about/', [homeController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    $id = Auth::user()->id;
    // $orders = Order::where('user_id', $id)->orderBy('id', 'DESC')->get();
    // return view('admin.order.userOrder', compact('orders'));
    return view('dashboard');
})->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// single Post 
Route::get('r4skd4iltd/{id}', [homeController::class, 'singlePost'])->name('singlePost');
// category Post 
Route::get('post/categoryPage/{id}', [homeController::class, 'categoryPage']);





require __DIR__ . '/auth.php';

// admin




Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
});

Route::get('/admin/login', [AdminController::class, 'Adminlogin'])->name('adminLogin');



Route::middleware(['auth', 'role:admin'])->group(function () {

    // home manager
    Route::get('/home/manager/', [managerController::class, 'homeLogo'])->name('manager');
    Route::POST('/add/header/logo/', [managerController::class, 'header'])->name('header.store');
    Route::POST('/add/footer/logo/', [managerController::class, 'footer'])->name('footer.store');

    // video area add_video
    Route::controller(videoController::class)->group(function () {
        Route::get('/add_video', 'addVideo')->name('add_video');
        Route::post('/store/video', 'storeBrand')->name('video_upload');
        Route::get('/all/video', 'allVideo')->name('all_video');
        Route::get('/delete/video/{id}', 'deleteVideoData')->name('video.delete');
        Route::get('/delete/video/{id}', 'deleteSelfVideoData')->name('SelfVideo.delete');
    });

    // self video 
    Route::get('/add_upload', [videoController::class, 'showForm'])->name('show.upload.form');
    Route::get('/allSelfVideo', [videoController::class, 'allSelfVideo'])->name('allSelfVideo');
    Route::post('/store/upload', [videoController::class, 'upload'])->name('upload.video');

    // brand
    Route::controller(brandController::class)->group(function () {
        Route::get('/add/brand', 'addBrand')->name('add_brand');
        Route::get('/all/brand', 'allBrand')->name('all_brand');
        Route::post('/store/brand', 'storeBrand')->name('brand.store');
        Route::get('/all/brand/{id}', 'brandEdit')->name('edit.brand');
        Route::post('/update/brand', 'updateBrand')->name('brand.update');
        Route::get('/delete/brand/{id}', 'deleteBrand')->name('brand.delete');

        // user and password 
        Route::post('/store/user', 'storeUser')->name('user.store');
        Route::get('/addUser', 'addUser')->name('addUser');
        Route::get('/allUser', 'allUser')->name('allUser');
        Route::get('/delete/user/{id}', 'deleteUser')->name('user.delete');
        Route::get('/user/data/', 'userData')->name('userData');
        Route::get('/user/data/{id}', 'userDataInfo')->name('userInfo');
        Route::Post('/user/data/update', 'updateDataInfo')->name('update.info');
        Route::Post('/user/password/update', 'updateDataInfoPass')->name('update.pass');
        Route::get('/user/password/', 'userPassword')->name('user.password');
    });

    // category
    Route::controller(categoryController::class)->group(function () {
        Route::get('/add/category', 'addCategory')->name('addCategory');
        Route::get('/all/category', 'allCategory')->name('allCategory');
        Route::post('/store/category', 'storeCate')->name('cate.store');
        Route::get('/all/category/{id}', 'cateEdit')->name('edit.cate');
        Route::post('/update/category', 'updateCategory')->name('cate.update');
        Route::get('/delete/cate/{id}', 'deleteCate')->name('cate.delete');
    });


    // category
    Route::controller(categoryController::class)->group(function () {
        Route::get('/add/subCategory', 'addSubCategory')->name('addSubCategory');
        Route::post('/store/SubCategory', 'storeSubCate')->name('Sub.cate.store');
        Route::get('/all/SubCategory', 'allSubCategory')->name('allSubCategory');
    });

    // product
    Route::controller(productController::class)->group(function () {
        Route::get('/add/product', 'addProduct')->name('addProduct');
        Route::get('/all/product', 'allProduct')->name('allProduct');
        Route::post('/store/product', 'storeProduct')->name('product.store');
        Route::get('/all/product/{id}', 'productEdit')->name('edit.product');
        Route::post('/update/product', 'productUpdate')->name('product.update');
        Route::get('/delete/product/{id}', 'deleteProduct')->name('product.delete');
        Route::get('/view/product/{id}', 'viewProduct')->name('product.view');
    });
});
