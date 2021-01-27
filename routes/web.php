<?php

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
//VISTAS PRINCIPALES
Route::get('/', [App\Http\Controllers\ProductoController::class, 'get'])->name('welcome');
Route::get('/compra-iapito', [App\Http\Controllers\ProductoController::class, 'compraIapitos'])->name('compra.iapito');
Route::get('/quien-somos', [App\Http\Controllers\ProductoController::class, 'quienSomos'])->name('quien.somos');
Route::get('/contacto', [App\Http\Controllers\ProductoController::class, 'contacto'])->name('contacto');
Route::post('/info-store-contac', [App\Http\Controllers\ProductoController::class, 'storeContac'])->name('info.store.contac');

//RUTAS QUE UTILIZARA EL CARRITO
Route::get('/cart-ver', [App\Http\Controllers\CartController::class, 'ver'])->name('cart.ver');
Route::get('/cart-add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.add');

Route::get('/cart-delete/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('cart.delete');
Route::get('/cart-update-menos/{id}', [App\Http\Controllers\CartController::class, 'updateMenos'])->name('cart.update.menos');
Route::get('/cart-update-mas/{id}', [App\Http\Controllers\CartController::class, 'updateMas'])->name('cart.update.mas');

//RUTA PARA COMPRAR UN SOLO PRODUCTO
Route::get('/compra-add/{id}', [App\Http\Controllers\ProductoController::class, 'compra'])->name('compra.add');
Route::get('/compra-ver', [App\Http\Controllers\ProductoController::class, 'verCompra'])->name('compra.ver');

//FOMURLARIO DE ENVIO Y PAGO
Route::post('/compra-datos/{id}', [App\Http\Controllers\ProductoController::class, 'datCompra'])->name('compra.data');//formulario para un solo producto
Route::get('/compra-datos-cart', [App\Http\Controllers\ProductoController::class, 'datCompraCart'])->name('compra.data.cart');//formulario para muchos producos del carrito
Route::post('/info-store/{id}', [App\Http\Controllers\ProductoController::class, 'store'])->name('info.store');//formulario para un solo producto
Route::post('/info-store', [App\Http\Controllers\ProductoController::class, 'store2'])->name('info.store2');

//Route::post('/datos-enviados/{id}', [App\Http\Controllers\ProductoController::class, 'getData'])->name('data.enviada');

Route::post('/realizar-compra/{id}', [App\Http\Controllers\ProductoController::class, 'show'])->name('realizar.compra');

//paypal
Route::post('/paypal',  [App\Http\Controllers\PaymentController::class, 'payWithpaypal'])->name('paypal');
Route::get('/status', [App\Http\Controllers\PaymentController::class, 'getPaymentStatus'])->name('status');

//Apartado para el admin
Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'ver'])->name('admin');
Route::get('/admin-crear', [App\Http\Controllers\AdminController::class, 'vistaCrear'])->name('crear');
Route::post('/admin-nuevo', [App\Http\Controllers\AdminController::class, 'nuevo'])->name('nuevo');

Route::get('producto/eliminar/{eliminar}', [App\Http\Controllers\AdminController::class, 'eliminar']);

Route::get('producto/editar/{id}', [App\Http\Controllers\AdminController::class, 'editar']);
Route::get('producto/actualizado/{id}', [App\Http\Controllers\AdminController::class, 'actualizar']);