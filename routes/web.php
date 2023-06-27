<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    
    Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class,'index']);

    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('add-category',[App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('add-category',[App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('edit-category/{category_id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('update-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('delete-category/{category_id}',[App\Http\Controllers\Admin\CategoryController::class, 'destroy']);

    // Routh::get('post',[App\Http\Controllers\Admin\PostController::class, 'index'] );    me making it pa
    // the list of poeple
    Route::get('/view-customer', function () { return view('view-customer');});

    

});


Route::get('/review', function () {return view('review');
});
// * need to place in role_user stuff
Route::get('/order-now', function () {return view('order-now');
});
// Used for testing
Route::get('/testing', function () {return view('testing');
});
// create review lol
Route::get('/create-review', function () { return view('create-review');});
