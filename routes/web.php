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



Route::get("/", "PostController@index")->name("index");
Route::get("/single", "PostController@single")->name("single");

Route::get("/create", "PostController@create")->name("create");
Route::post("/store", "PostController@store")->name("store");
Route::post("/update", "PostController@update")->name("update");
Route::post("/delete", "PostController@delete")->name("delete");
Route::get("/show", "PostController@show")->name("show");
