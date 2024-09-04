<?php

use App\Http\Controllers\AdireController;
use App\Http\Controllers\WearsController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\RouteBinding;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllproductsController;
use App\Http\Controllers\AnkaraController;
use App\Http\Controllers\LaceController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SubtotalController;
use App\Http\Controllers\SinglecartController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Payment2Controller;
use App\Http\Controllers\Payment3Controller;
use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\SignupController;


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

Route::get('/', [WearsController::class, 'index'])->name('home');
Route::get('/products/{ankara}', [WearsController::class, 'product']);
Route::get('/products2/{adire}', [WearsController::class, 'product2']);
Route::get('/products3/{lace}', [WearsController::class, 'product3']);
Route::get('/contact', [WearsController::class, 'contact']);
Route::get('/privacy', [WearsController::class, 'privacy']);
Route::get('/create', [AnkaraController::class, 'create'])->name('create');
Route::get('/signin', [UserController::class, 'signin'])->name('signin');
Route::get('/signup', [UserController::class, 'signup'])->name('signup');
Route::post('/signup-store', [UserController::class, 'store'])->name('store');
Route::get('/verify', [DeliveryController::class, 'verify']);
Route::get('/createadire', [AdireController::class, 'createadire'])->name('createadire');
Route::get('/createlace', [LaceController::class, 'createlace'])->name('createlace');
Route::get('/cart', [CartController::class, 'cart'])->middleware('auth');
Route::get('/verifycart', [SubtotalController::class, 'verifycart'])->name('verifycart');
Route::get('/singlecart', [SinglecartController::class, 'singlecart'])->name('singlecart');
Route::get('/productid/{cartid}', [CartController::class, 'cartid'])->name('cartid');
Route::post('/delivery', [DeliveryController::class, 'delivery'])->name('delivery');
Route::post('/subtotal', [SubtotalController::class, 'subtotal'])->name('subtotal');
Route::get('/payment', [DeliveryController::class, 'payment'])->name('payment');
Route::post('/payments', [PaymentController::class, 'payments'])->name('payments');
Route::post('/location', [Payment3Controller::class, 'location'])->name('location');
Route::get('/payment2', [PaymentController::class, 'payment2'])->name('payment2');
Route::get('/payment3', [Payment3Controller::class, 'payment3'])->name('payment3');
Route::get('/cartpayment', [PaymentController::class, 'cartpayment'])->name('cartpayment');
Route::post('/payments2', [Payment2Controller::class, 'payments2'])->name('payments2');
Route::post('/total', [DeliveryController::class, 'total'])->name('total');
Route::post('/carts', [CartController::class, 'carts'])->name('carts');
Route::delete('/cart/{cart}', [DeliveryController::class, 'delete'])->name('delete');
Route::post('/singlecarts', [SinglecartController::class, 'singlecarts'])->name('singlecarts');
Route::post('/createposts', [AnkaraController::class, 'store'])->name('ankarastore');
Route::post('/createposts2', [AdireController::class, 'store'])->name('adirestore');
Route::post('/createposts3', [LaceController::class, 'store'])->name('lacestore');
Route::get('/allproducts',[AllproductsController::class, 'allproducts'])->name('allproducts');
Route::get('/allproducts2', [AllproductsController::class, 'allproducts2'])->name('adire');
Route::get('/allproducts3', [AllproductsController::class, 'allproducts3'])->name('lace');
Route::post('/signin/authenticate', [UserController::class, 'authenticate']);
Route::post('/signout', [UserController::class, 'logout']);




