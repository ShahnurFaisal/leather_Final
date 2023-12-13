<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\backend\BlogController;
use App\Http\Controllers\backend\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\CustomerRequestController;
use App\Http\Controllers\backend\ProfileController;

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

// Route::redirect('/','admin/dashboard');

// Route::redirect('/','/dashboard');

// Route::prefix('admin')->group(function(){



//Backend

Route::group(['middleware' => ['authAdmin'],'prefix' => 'admin'], function () {
    Route::name('admin.')->group(function(){
        Route::get('dashboard',[DashboardController::class,'dashboard'])->name('dashboard');
        // category start
        Route::match(['get','post'],'category/add',[CategoryController::class,'category_add'])->name('category.add');
        Route::match(['get','post'],'category/edit/{id}',[CategoryController::class,'category_edit'])->name('category.edit');
        Route::get('category/list',[CategoryController::class,'category_list'])->name('category.list');
        Route::get('category/delete/{id}',[CategoryController::class,'category_delete'])->name('category.delete');
        // category end
        // subcategory start
        // Route::match(['get','post'],'subcategory/list',[CategoryController::class,'subcategory_list'])->name('subcategory.list');
        // Route::post('subcategory/add',[CategoryController::class,'subcategory_add'])->name('subcategory.add');
        // Route::post('subcategory/edit',[CategoryController::class,'subcategory_edit'])->name('subcategory.edit');
        // Route::get('subcategory/delete/{id}',[CategoryController::class,'subcategory_delete'])->name('subcategory.delete');
        // sub category end
        // product start
        Route::match(['get','post'],'product/add',[ProductController::class,'product_add'])->name('product.add');
        Route::match(['get','post'],'product/edit/{id}',[ProductController::class,'product_edit'])->name('product.edit');
        Route::get('product/list',[ProductController::class,'product_list'])->name('product.list');
        Route::get('product/delete/{id}',[ProductController::class,'product_delete'])->name('product.delete');
        Route::get('product/subcategory/show',[ProductController::class,'product_subcategory_show'])->name('product.subcategory.show');
        // product end
        //blog start
        Route::match(['get','post'],'blog-add',[BlogController::class,'blog_add'])->name('blog.add');
        Route::match(['get','post'],'blog-edit/{id}',[BlogController::class,'blog_edit'])->name('blog.edit');
        Route::get('blog/list',[BlogController::class,'blog_list'])->name('blog.list');
        Route::get('blog/delete/{id}',[BlogController::class,'blog_delete'])->name('blog.delete');
        //blog end
        // about
        Route::match(['get','post'],'about/add',[AboutController::class,'aboutAdd'])->name('about.add');
        // about end
        // profile
        Route::match(['get','post'],'profile/update',[ProfileController::class,'profile_update'])->name('profile.update');

        // customer request
        Route::get('customer/request/list',[CustomerRequestController::class,'Customer_request_list'])->name('customer.request.list');
        Route::get('customer/request/delete/{id}',[CustomerRequestController::class,'Customer_request_delete'])->name('customer.request.delete');


    });
});
//Admin Login
Route::get('login', [AdminAuthController::class, 'showLogin'])->name('showLogin');
Route::post('login', [AdminAuthController::class, 'login'])->name('login');
//Admin Logout
Route::get('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');




///Front End
Route::get('/',[FrontendController::class,'home'])->name('home');
Route::get('about-us',[FrontendController::class,'about_us'])->name('about.us');
Route::get('contact',[FrontendController::class,'contact'])->name('contact');
Route::post('customer/request/add',[FrontendController::class,'Customer_request_add'])->name('customer.request.add');
Route::get('blog',[FrontendController::class,'blog'])->name('blog');
Route::get('product',[FrontendController::class,'product'])->name('product');
Route::get('product-by-category',[FrontendController::class,'product_by_category'])->name('product.by.category');
Route::get('single/product',[FrontendController::class,'single_product'])->name('single.product');
Route::get('blog',[FrontendController::class,'blog'])->name('blog');
Route::get('aboutUs',[FrontendController::class,'about_us'])->name('aboutUs');
