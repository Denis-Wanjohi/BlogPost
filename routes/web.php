<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Controller;

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

;
Route::get('/',[Controller::class,'home']);
//Register user
Route::get('/register',[UserController::class,'create']);
//Store user
Route::post('/register',[UserController::class,'store']);

//Login user
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'authenticate']);

//Logout user
Route::post('/logout',[UserController::class,'logout']);


//Create a blog
Route::get('/createBlog',[BlogController::class,'create'])->middleware('auth');
//Store blog
Route::post('/createBlog',[BlogController::class,'store'])->middleware('auth');

//manage Blog
Route::get('/manageBlog',[BlogController::class,'manage'])->middleware('auth');
//edit blog
Route::get('/editBlog/{id}',[BlogController::class,'editBlog'])->middleware('auth');
Route::put('/updateBlog/{id}',[BlogController::class,'updateBlog'])->middleware('auth');

//delete blog
Route::delete('/deleteBlog/{id}',[BlogController::class,'deleteBlog'])->middleware('auth');

//read blog
Route::get('/read/{id}',[BlogController::class,'read']);

//comments
Route::get('/comment',[BlogController::class,'comment'])->middleware('auth');

//create event
Route::get('/createEvent',[EventController::class,'event'])->middleware('auth');
//store event
Route::post('/createEvent',[EventController::class,'store'])->middleware('auth');

//show event
Route::get('/showEvent/{id}',[EventController::class,'show']);
//manage event
Route::get('/manageEvent',[EventController::class,'manage'])->middleware('auth');
//edit event
Route::get('/editEvent/{id}',[EventController::class,'editEvent'])->middleware('auth');
Route::put('/updateEvent/{id}',[EventController::class,'updateEvent'])->middleware('auth');
//delete event
Route::delete('/deleteEvent/{id}',[EventController::class,'deleteEvent'])->middleware('auth');



















