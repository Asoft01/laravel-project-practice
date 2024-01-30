<?php

use App\Jobs\SlowJob;
use Illuminate\Support\Facades\Route;

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
    // sleep(5);
    SlowJob::dispatch();
    // SlowJob::dispatch()->delay(5);
    return view('welcome');
});
