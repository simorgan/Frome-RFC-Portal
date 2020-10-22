<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\KitAppController;
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

/**
 * Routes to pages
 */
Route::get('/', [PagesController::class, 'index'])->middleware('auth');

Route::get('/home', [PagesController::class, 'index'])->middleware('auth');

Route::get('kitMemberSearch', [PagesController::class, 'kitMemberSearch'])->middleware('auth');

Route::get('kitCollectionAddMember', [PagesController::class, 'kitCollectionAddMember'])->middleware('auth');



/**
 * Route and resources for the Kit Collection App
 */
Route::get('kitCollectionShowMember', [KitAppController::class, 'kitCollectionShowMember'])->middleware('auth');

Route::resource('kitCollection', KitAppController::class)->parameters([
  'kitCollection' => 'id'])->middleware('auth');


