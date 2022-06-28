<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PhotoController;

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

Route::get('/', function () {
    return redirect('/messages');         
});

/*
Route::get('/messages', function () {
    return view('messages'); 
    //return 'hello world';
});*/

// Route resource creates a number of routes to CRUD an object 
// create, read, update, delete
// in this case 'photos'
// which use the PhotoController
Route::resource('photos', PhotoController::class); 
 
// show all messages
Route::get('/messages', [MessageController::class, 'showAll']);

// display message details
Route::get('/message/{id}', [MessageController::class, 'details']);

// display edit messages view
Route::get('/messageEdit/{id}', [MessageController::class, 'editView'])->middleware('auth');;


//Route::get('/searchResult/{selectedType}', [MessageController::class, 'showSelection']);

//protecting a single Route
Route::delete('/message/{id}', [MessageController::class, 'delete'])->middleware('auth');

Route::put('/message/{id}', [MessageController::class, 'update']);

//protecting a group of Routes
Route::middleware('auth')->group(function () {
    Route::post('/create', [MessageController::class, 'create']);    
    Route::post('comment', [CommentController::class, 'addComment']); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
