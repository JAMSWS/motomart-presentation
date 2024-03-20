<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



// Landing Page
Route::get('/',[App\Http\Controllers\Frontend\FrontendController::class, 'index']);

//Collections
Route::get('/collections', [App\Http\Controllers\Frontend\FrontendController::class, 'categories']);
// Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
Route::get('/collections/{category_slug}', [App\Http\Controllers\Frontend\FrontendController::class, 'products']);
Route::get('/collections/{category_slug}/{product_name}', [App\Http\Controllers\Frontend\FrontendController::class, 'productsView']);

Route::get('/search', [App\Http\Controllers\Frontend\FrontendController::class, 'searchProducts']);

//wishlist
Route::middleware(['auth'])->group(function () {
    Route::get('wishlist',[App\Http\Controllers\Frontend\WishlistController::class, 'index' ]);
    Route::get('cart',[App\Http\Controllers\Frontend\CartController::class, 'index' ]);
    Route::get('checkout',[App\Http\Controllers\Frontend\CheckoutController::class, 'index' ]);
    Route::get('/orders',[App\Http\Controllers\Frontend\OrderController::class, 'index']);
    Route::get('/orders/{orderId}',[App\Http\Controllers\Frontend\OrderController::class, 'show']);


});

Route::get('thank-you', [App\Http\Controllers\Frontend\FrontendController::class, 'thankyou']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Admin route
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    // Slider Routes
     Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {

        Route::get('sliders', 'index');
        Route::get('sliders/create', 'create');
        Route::post('sliders/create','store');
        Route::get('sliders/{slider}/edit', 'edit');
        Route::put('sliders/{slider}', 'update');
        Route::get('sliders/{slider}/delete', 'destroy');


    });

    // Category Routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('products/{product_id}/delete', 'destroy');

        Route::get('product-image/{product_image_id}/delete','destroyImage');


    });


     Route::get('/brands',App\Livewire\Admin\Brand\Index::class );

     Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function () {
        Route::get('/colors', 'index');
        Route::get('/colors/create', 'create');
        Route::post('/colors/create', 'store');
        Route::get('/colors/{color}/edit','edit');
        Route::put('/colors/{color_id}', 'update');
        Route::get('/colors/{color_id}/delete','destroy');


    });

    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
        Route::get('/users', 'index');
        Route::get('/users/create', 'create');
        Route::post('/users', 'store');
        Route::get('/users/{user_id}/edit', 'edit');
        Route::put('users/{user_id}', 'update');
        Route::get('users/{user_id}/delete', 'destroy');



    });
});


// Selling Center Routes
// Route::middleware(['auth'])->group(function() {
//     Route::prefix('sellercenter')->group(function() {
//         Route::get('dashboard', [App\Http\Controllers\SellingCenter\DashboardController::class, 'index']);
//         // Add more routes for managing products, categories, etc.




//     });
// });

Route::prefix('sellercenter')->middleware(['auth','isSeller'])->group(function() {

    Route::get('dashboard', [App\Http\Controllers\SellingCenter\DashboardController::class, 'index']);

    //add product view product
    Route::controller(App\Http\Controllers\SellingCenter\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('products/{product_id}/delete', 'destroy');
        Route::get('product-image/{product_image_id}/delete','destroyImage');

    });

    //Reserved buyer
    // Route::controller(App\Http\Controllers\SellingCenter\ReservedBuyerController::class)->group(function () {
    //     Route::get('/reservedbuyer', 'index');
    // });


    //Orders
    Route::controller(App\Http\Controllers\SellingCenter\OrderController::class)->group(function () {
        Route::get('/orders', 'index');
        Route::get('/orders/{orderId}', 'show');
        Route::put('/orders/{orderId}', 'updateOrderStatus');

        Route::get('/invoice/{orderId}', 'viewInvoice');
        Route::get('/invoice/{orderId}/generate', 'generateInvoice');


    });



    // sellercenter/orders
    // Route::controller(App\Http\Controllers\SellingCenter\OrderController::class)->group(function () {
    //     Route::get('/orders', 'index');
    // });
});


