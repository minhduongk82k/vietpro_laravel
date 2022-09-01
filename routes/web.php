<?php

use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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

Route::get('/test1',function(){
    $products = DB::table('products')
    ->join("categories", "products.categories_id", "=", "categories.id")
    ->select("products.name as products_name", "categories.name as categories_name")
    ->get()
    ->all()
;
dd($products);
    ;
    
});








Route::get("/login", [AuthController::class, "getLogin","middleware"=>"checklogin"]);
Route::post("/login",[AuthController::class, "postLogin","middleware"=>"checklogin"]);

Route::get("/test", [TestController::class, "Test1"]
    
        
    
);

Route::group(["prefix"=>"admin", "middleware"=>"checkadmin"], function(){
    Route::get("/",[AdminController::class, "index"]); 
    Route::get("/logout",[AdminController::class, "logout"]);   


    Route::group(["prefix"=>"product"], function(){
        Route::get("/", [ProductController::class, "index"]); 
        Route::get("/create", [ProductController::class, "create"]); 
        Route::post("/store", [ProductController::class, "store"]); 
        Route::get("/edit",   [ProductController::class, "edit"]); 
        Route::post("/update",[ProductController::class, "update"]); 
        Route::get("/delete", [ProductController::class, "delete"]); 
    }); 
    Route::group(["prefix"=>"users"], function(){
        Route::get("/", [UserController::class, "index"]);
        Route::get("/create",[UserController::class, "create"]); 
        Route::post("/store",[UserController::class, "store"]); 
        Route::get("/edit",[UserController::class, "edit"]); 
        Route::post("/update", [UserController::class, "edit"]); 
        Route::get("/delete", [UserController::class, "delete"]); 
    }); 
    Route::group(["prefix"=>"category"],function(){
        Route::get("/", [CategoryController::class, "index"]);
        Route::get("/create",[CategoryController::class, "create"]); 
        Route::post("/store", [CategoryController::class, "store"]); 
        Route::get("/edit", [ategoryController::class, "edit"]); 
        Route::post("/update", [CategoryController::class, "update"]); 
        Route::get("/delete",[CategoryController::class, "delete"]); 
    }); 
});