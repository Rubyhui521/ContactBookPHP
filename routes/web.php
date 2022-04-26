<?php

use Illuminate\Support\Facades\Route;
use App\Models\Contact;
use App\Http\Controllers\ContactController;
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

// get: display data
// post: create data
// put: updating data
// delete: deleting data


// display contacts page
// each route hold a URI and a function
Route::get('/', [ContactController::class, 'index']);
// display detailed page
// route parameters can be required or optional and allows a segment of the URI to be variable, a route parameter is passed to the route callback function 
// it can be named as anything inside of the {}, cause it will be passed to the relevent public function's argument (in this instance, I named the argument $id although it doesn't need to share the same name with the segment) as a value 
Route::get('/contact/{id}', [ContactController::class, 'show']);
// display edit form
Route::get('/contact/{id}/edit', [ContactController::class, 'edit']);
// update data
Route::put('/contact/{id}', [ContactController::class, 'update']);
// delete data
Route::delete('/contact/{id}', [ContactController::class, 'destroy']);
// display new form
Route::get('/new', [ContactController::class, 'create']);
// store a new contact
Route::post('/', [ContactController::class, 'store']);

