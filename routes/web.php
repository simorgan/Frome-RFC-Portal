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

/*Route::get('/', function () {
    return view('pages.dashboard');
})->middleware('auth');

Route::get('/home', function () {
  $title = 'Dashboard';
   return view('pages.dashboard')->with('Title', $title);
})->middleware('auth');*/


Route::get('/', [PagesController::class, 'index'])->middleware('auth');


Route::get('/home', [PagesController::class, 'index'])->middleware('auth');

//Route::get('/collectionId', [PagesController::class, 'collectionId'])->middleware('auth');

//Route::get('/AllocatedKit', [PostController::class, 'kitAllocated'])->middleware('auth');

//Route::get('/kitCollecting', [PagesController::class, 'kitCollecting'])->middleware('auth');

//Route::post('/kitCollectionId', [PostController::class, 'kitOut'])->middleware('auth');

//Route::post('/kitCollectionSubmit', [PostController::class, 'kitOutCollection'])->middleware('auth');

Route::resource('kitCollection', KitAppController::class)->parameters([
  'kitCollection' => 'id']);

Route::get('kitMemberSearch', [PagesController::class, 'kitMemberSearch']);

Route::get('kitCollectionShowMember', [KitAppController::class, 'kitCollectionShowMember']);

Route::get('kitCollectionAddMember', [PagesController::class, 'kitCollectionAddMember']);

 


