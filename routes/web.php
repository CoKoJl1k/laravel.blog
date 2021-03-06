<?php


use App\Http\Controllers\MainController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\SearchController;

use App\Http\Controllers\ListOfPostsController;
use Illuminate\Support\Facades\Route;


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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [MainController::class, 'index'])->name('welcome');

Route::get('create', [CreateController::class, 'index'])->name('form');
Route::post('create', [CreateController::class, 'create'])->name('create_form');

Route::get('edit/{id}', [EditController::class, 'index'])->name('edit_form_get');
Route::put('edit/{id}', [EditController::class, 'update'] )->name('edit_form_put');

Route::delete('delete/{id}',[EditController::class, 'destroy'])->name('delete');


Route::get('search',[SearchController::class, 'index'])->name('search');


Route::get('errors_update', function () {
    return view('errors_update');
})->name('errors_update');

// routs test

Route::get('list_of_posts', [ListOfPostsController::class, 'index'])->name('list_of_posts');

Route::get('test2', function () {
    return view('test2');
})->name('test2');
