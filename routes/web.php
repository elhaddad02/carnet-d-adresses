<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// get welcome view
Route::get('/', function () {
    return view('welcome');
});

// add contact view
Route::get('/add-contact',function (){
    return view('addContact');
});

// get all contact view
Route::get('/get-all-contact',function(){
    return view('GetContacts');
});



// add new contact in users table
Route::post('/add-user', [UserController::class,'addUser']);

// get all contacts from users table
Route::get('/get-all-contact', [UserController::class,'getUsers']);

//get Edit form
Route::get('/edit-contact/{id}', [UserController::class,'editUser']);

// update contact
Route::put('/update-user/{id}', [UserController::class,'updateUser']);

// delete contact 
Route::get('/delete/{id}', [UserController::class, 'deleteUser']);