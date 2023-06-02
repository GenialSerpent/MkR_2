<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PointController;
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

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::get('/students/store', [StudentController::class, 'store']);
Route::get('/students/show', [StudentController::class, 'show']);
Route::get('/students/edit', [StudentController::class, 'edit']);
Route::get('/students/update', [StudentController::class, 'update']);
Route::get('/students/delete', [StudentController::class, 'destroy']);

Route::get('/points', [PointController::class, 'index']);
Route::get('/points/create', [PointController::class, 'create']);
Route::get('/points/store', [PointController::class, 'store']);
Route::get('/points/show', [PointController::class, 'show']);
Route::get('/points/edit', [PointController::class, 'edit']);
Route::get('/points/update', [PointController::class, 'update']);
Route::get('/points/delete', [PointController::class, 'destroy']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/students', [StudentController::class, 'index']);
    Route::put('/students/{id}', [StudentController::class, 'update'])
        ->where('id', '[0-9]+')
        ->middleware('isAdminOrEditor');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);

