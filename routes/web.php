<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(["prefix" => "admin", "namespace" => "Admin\Module"], function(){
    Route::group(["namespace" => "Auth"], function(){
        Route::get("/", [
            "as"    => "/",
            "uses"  => "Login@view"
        ]);

        Route::get("forget-password", function(){
            echo "Forget Password";
        });
    });
});
