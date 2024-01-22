<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\Starting;
use App\Http\Controllers\Statistics;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
 
Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
    var_dump($token);
    // ...
});

Route::post('/start', [Starting::class,'userResponce']);

Route::get('/statistics', [Statistics::class,'statResponce']);


