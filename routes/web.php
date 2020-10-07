<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

/*Route::get('/', function () {
    return view('pages.dashboard');
})->middleware('auth');

Route::get('/home', function () {
  $title = 'Dashboard';
   return view('pages.dashboard')->with('Title', $title);
})->middleware('auth');*/


Route::get('/', [PagesController::class, 'index'])->middleware('auth');


Route::get('/home', [PagesController::class, 'index'])->middleware('auth');

Route::get('/AllocatedKit', [PagesController::class, 'kitout'])->middleware('auth');

