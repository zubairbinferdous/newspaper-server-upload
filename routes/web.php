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
use App\Http\Controllers\orderController;

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
//     return view('fontend.index');
// });

// home area 
Route::get('/', [homeController::class, 'home'])->name('homePage');
// Route::get('/product/', [homeController::class, 'product'])->name('product');
// Route::get('/shop/', [homeController::class, 'shop'])->name('shop');
// Route::get('/about/', [homeController::class, 'about'])->name('about');

Route::get('/dashboard', function () {
    $id = Auth::user()->id;
    $orders = Order::where('user_id', $id)->orderBy('id', 'DESC')->get();
    // return view('admin.order.userOrder', compact('orders'));
    return view('dashboard', compact('orders'));
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});


// add to cart

// Route::post('/dcart/data/store/{id}', [homeController::class, 'addToCart']);
// Route::get('/add/to/cart/{id}', [homeController::class, 'addToCartData']);
// Route::get('product/single/{id}', [homeController::class, 'singleProduct'])->name('singleProduct');
// Route::get('/product/mini/count', [homeController::class, 'miniProduct']);
// Route::get('product/category/{id}', [homeController::class, 'catWiseProduct']);
// Route::get('product/subCategory/{id}', [homeController::class, 'SubWiseProduct']);

// Route::middleware(['auth', 'role:user'])->group(function () {
//     Route::get('/view_cart', [homeController::class, 'cartView'])->name('cartView');
//     Route::get('/get-cart-product', [homeController::class, 'GetCartProduct']);
//     Route::get('/cart-remove/{rowId}', [homeController::class, 'CartRemove']);
//     Route::get('/cart-decrement/{rowId}', [homeController::class, 'CartDecrement']);
//     Route::get('/cart-increment/{rowId}', [homeController::class, 'CartIncrement']);
//     Route::get('/checkout', [homeController::class, 'checkout'])->name('checkout');
//     Route::post('/checkout/store', [checkOutController::class, 'checkoutStore'])->name('checkout.store');
//     Route::post('/checkout/order', [checkOutController::class, 'cashOrder'])->name('cash.order');
//     Route::get('/UserOrder', [orderController::class, 'UserOrder'])->name('UserOrder');
//     Route::get('/orderUserView/{id}', [orderController::class, 'orderUserView'])->name('orderUserView');
// });

require __DIR__ . '/auth.php';

// admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');
});

Route::get('/admin/login', [AdminController::class, 'Adminlogin']);


Route::middleware(['auth', 'role:admin'])->group(function () {
    // brand
    Route::controller(brandController::class)->group(function () {
        Route::get('/add/brand', 'addBrand')->name('add_brand');
        Route::get('/all/brand', 'allBrand')->name('all_brand');
        Route::post('/store/brand', 'storeBrand')->name('brand.store');
        Route::get('/all/brand/{id}', 'brandEdit')->name('edit.brand');
        Route::post('/update/brand', 'updateBrand')->name('brand.update');
        Route::get('/delete/brand/{id}', 'deleteBrand')->name('brand.delete');
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
    });
});
