<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//User registration
Route::get('/user-register', [UserController::class, 'viewUser'])->name('view_users');
Route::post('/form-user', [UserController::class, 'formUser'])->name('send_form');

//Table users
Route::get('/table-users', [UserController::class, 'viewTable'])->name('view_table');
Route::delete('/delete-user', [UserController::class, 'deleteUser'])->name('delete_user');

//Edit user
Route::get('/edit-user/{user}', [UserController::class, 'viewEditUser'])->name('edit_user');
Route::patch('/edit-register/{user}', [UserController::class, 'editUser'])->name('edit');

//Contract
Route::get('/contract-user/{user}', [UserController::class, 'viewContract'])->name('view_contract');