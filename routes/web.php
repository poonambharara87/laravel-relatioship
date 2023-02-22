<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Student;
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
Route::get('/', function(){
   
});

Route::get('/studendata', [HomeController::class, 'index']);
Route::get('showData', [HomeController::class, 'showData']);