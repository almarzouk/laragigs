<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Validator;
use App\Models\Listing;
/*
 #Common Resource Routes:
 --#index - Show all listings
 --#show - Show single listings
 --#create - Create new single listings
 --#store - Store new listings
 --#edit - Edit listings
 --#update - Update listings
 --#destroy - Delete listings
*/
// All listing
Route::get('/', [ListingController::class, 'index']);
// create Listing
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');
// Store listings data
Route::post('/listings', [ListingController::class, 'store']);
// show Edit listings data
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');
// Update listings data
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');
// Delete listings data
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');
// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show register creat form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
// Store user to databse
Route::post('/users', [UserController::class, 'store']);
// Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
// show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
// show login form
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
