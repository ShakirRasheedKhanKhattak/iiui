<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

//* *********************************************************** */
//*                     DEFAULT ROUTE WELCOME PAGE              */
//* *********************************************************** */
Route::get('/', function () {
    return view('welcome');
});
//* *********************************************************** */
//*                         PROJECT ROUTE PAGE                  */
//* *********************************************************** */
Route::resource('projects', ProjectController::class);