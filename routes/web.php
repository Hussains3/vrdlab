<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ResearcherController;
use App\Http\Controllers\ArticleController;
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


Auth::routes();
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/ourResearchers', [HomeController::class, 'ourResearchers'])->name('ourResearchers');
Route::get('/publications', [HomeController::class, 'publications'])->name('publications');
Route::get('/authorswiew', [HomeController::class, 'authorswiew'])->name('authorswiew');
Route::get('/researcherpub/{researcher}', [HomeController::class, 'researcherpub'])->name('researcherpub');
Route::get('/publication/{article}', [HomeController::class, 'publication'])->name('publication');
Route::get('/category/{category}', [HomeController::class, 'category'])->name('category');
Route::get('contact', function ()
{
    return view('contact');
})->name('contact');
Route::get('researcher-area', function ()
{
    return view('researcher-area');
})->name('researcher-area');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/vrdadmin', [HomeController::class, 'vrdadmin'])->name('vrdadmin');
    Route::resource('categories', CategoryController::class);
    Route::resource('authors', AuthorController::class);
    Route::resource('researchers', ResearcherController::class);
    Route::resource('articles', ArticleController::class);
});