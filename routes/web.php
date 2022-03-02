<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagescontrolle;
//use App\Http\Controllers\ProductController;
use App\Http\Controllers\backend\Adminpagescontroller;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\frontend\pagescontroller;
use App\Http\Controllers\frontend\productcontroller;
use App\Http\Controllers\backend\Brandcontroller;
use App\Http\Controllers\Sidebar;

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

//Route::get('/', function () {
  //  return view('index');
//});
/*prouduct route

*/
Route::get('/', [pagescontroller::class, 'index'])->name('index');

Route::get('/home', [pagescontroller::class, 'index'])->name('index');
Route::get('/product/{slug}', [productcontroller::class, 'show'])->name('product.show');
//sidebar
Route::get('/sideindex', [Sidebar::class, 'sideindex'])->name('side.index');
Route::get('/sideshow/{slug}', [Sidebar::class, 'show'])->name('side.show');
//search
Route::get('/search/(search)', [pagescontroller::class, 'search'])->name('search');
/*catagory route
*/
Route::get('/catagory', [CatagoryController::class,'index'])->name('catagory');
Route::get('/creat/catagory', [CatagoryController::class, 'create'])->name('creat.catagory');
Route::post('/store/catagory', [CatagoryController::class, 'store'])->name('catagory.store');

//edit catagory
Route::get('/edit/{id}', [CatagoryController::class, 'edit'])->name('catagory.edit');
    Route::Put('/update/{id}', [CatagoryController::class, 'update'])->name('catagory.update');
    //delete
    Route::get('/delete/catagory/{id}', [CatagoryController::class, 'destroy'])->name('delete.catagory');
//Route::post('/catagory/creat/{id}', [CatagoryController::class,'show'])->name('admin.catagory.creat');
/*
*/
Route::get('/product/creat', [productcontroller::class, 'product'])->name('home.product');
Route::get('/contact', [pagescontroller::class, 'contact'])->name('contact');

//Route::get('/productview', [App\Http\Controllers\ProductController::class, 'product'])->name('product');
/*admin*/
Route::group([ 'prefix' => 'admin' ], function(){
    Route::get('/', [Adminpagescontroller::class, 'index'])->name('admin.index');
    Route::get('/creat', [Adminpagescontroller::class, 'creat'])->name('admin.pages.creat');
    Route::post('/creat/store', [Adminpagescontroller::class, 'store'])->name('admin.pages.store');
    Route::get('/products', [Adminpagescontroller::class, 'manageproducts'])->name('admin.product');
    //edit
    Route::get('/edit/{id}', [Adminpagescontroller::class, 'productedit'])->name('product.edit');
    Route::Put('/update/{id}', [Adminpagescontroller::class, 'update'])->name('product.update');
    //delete
    Route::get('/delete/{id}', [Adminpagescontroller::class, 'deleteproduct'])->name('delete.product');

});
//brand
Route::get('/brand', [BrandController::class,'index'])->name('brand');
Route::get('/creat/brand', [BrandController::class, 'create'])->name('creat.brand');
Route::post('/store', [BrandController::class, 'store'])->name('brand.store');
//edit brand
Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
    Route::Put('/update/{id}', [BrandController::class, 'update'])->name('brand.update');
    //delete
    Route::get('/delete/brand/{id}', [BrandController::class, 'destroy'])->name('delete.brand');
//Route::post('/brand/creat/{id}', [brandController::class,'show'])->name('admin.brand.creat');
/*
*/
Auth::routes();

Route::get('/', [pagescontroller::class, 'index'])->name('index');
