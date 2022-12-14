<?php

use App\Http\Controllers\TaskController;
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
    return view('welcome');
})->name("welcome");

Route::get('/aujourd-hui', [TaskController::class, 'index'])->middleware(['auth'])->name('aujourd-hui');
Route::resources([
    'task' => TaskController::class
]);

Route::get('/prochainement', function () {
    return view('aujourdhui');
})->middleware(['auth'])->name('prochainement');

Route::get('/projets', function () {
    return view('aujourdhui');
})->middleware(['auth'])->name('projets');

require __DIR__ . '/auth.php';