<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PillController;

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
Route::get('setlocale/{locale}',function($lang){
    Session::put('locale',$lang);
    return redirect()->back();
});

Route::group(['middleware'=>'language'],function ()
{
    // Route::get('/', function () {
    //     return view('soon');
    // });
Route::get('/', [MainController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'view']);
Route::get('/blog', [NewsController::class, 'index']);
Route::get('/news/category/{id}', [NewsController::class, 'category']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/partners', [PagesController::class, 'partners'])->name('partners');
Route::get('/about', [PagesController::class, 'about']);
Route::get('/teams', [PagesController::class, 'team']);
Route::get('/jobs/{id}', [PagesController::class, 'jobs']);
Route::get('/hr', [PagesController::class, 'hr']);
Route::get('/company/{id}', [CompanyController::class, 'view']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
});

Route::get('/pills', [PillController::class, 'index']);
Route::post('/pills', [PillController::class, 'postPill'])->name('login.submit');
Route::get('/autocomplete-search', [PillController::class, 'getName']);
