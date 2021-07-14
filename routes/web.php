<?php

use App\Http\Controllers\EspecializationController;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', function () {
  return view('home');
});

Route::get('locale/{locale}', function ($locale) {
  session()->put('locale', $locale);
  return Redirect::back();
});

Route::get('/esp/{esp}', EspecializationController::class);

Route::get('/contacto', function(){
  return view('contact');
});
