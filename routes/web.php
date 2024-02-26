<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DocumentController;

Auth::routes();
Route::get('/', function () {return redirect('/login');})->name('start');
Route::get('document/{uuid}', [DocumentController::class, 'show'])->name('document.show');

Route::group(['middleware' => ['auth']], function() {

	Route::group(['middleware' => ['role:Root|Admin|Gerente']], function () {

		Route::prefix('users/')->group(function () {
			Route::get('index', [UserController::class, 'index'])->name('users.index');
			Route::get('create', [UserController::class, 'create'])->name('users.create');
			Route::post('store', [UserController::class, 'store'])->name('users.store');
			Route::get('show_{id}', [UserController::class, 'show'])->name('users.show');
			Route::get('edit_{id}', [UserController::class, 'edit'])->name('users.edit');
			Route::patch('update_{id}', [UserController::class, 'update'])->name('users.update');
			Route::delete('destroy_{id}', [UserController::class, 'destroy'])->name('users.destroy');
		});
		
		Route::prefix('roles/')->group(function () {
			Route::get('index', [RoleController::class, 'index'])->name('roles.index');
			Route::get('create', [RoleController::class, 'create'])->name('roles.create');
			Route::post('store', [RoleController::class, 'store'])->name('roles.store');
			Route::get('show_{id}', [RoleController::class, 'show'])->name('roles.show');
			Route::get('edit_{id}', [RoleController::class, 'edit'])->name('roles.edit');
			Route::patch('update_{id}', [RoleController::class, 'update'])->name('roles.update');
			Route::delete('destroy_{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
		});
		
		Route::get('users', function () {return view('pages.admin.users');})->name('users');
	});
	Route::group(['middleware' => ['role:Root|Admin|Gerente|User']], function () {
		Route::get('/home', [HomeController::class, 'index'])->name('home');
		Route::prefix('document/')->group(function () {
			Route::post('store', [DocumentController::class, 'store'])->name('document.store');
			Route::delete('destroy_{id}', [DocumentController::class, 'destroy'])->name('document.destroy');
		});
		// Validar uso de rutas
		Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
		Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
		Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	});
});

