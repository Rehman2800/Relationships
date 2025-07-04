<?php

use App\Http\Controllers\StdDataController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\WriterController;
use App\Models\students;
use App\Models\Writer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('student/data', [StudentsController::class, 'show']);
Route::get('student/create', [StudentsController::class, 'create']);
Route::get('student/inverse/data', [StdDataController::class, 'show']);


Route::get('/writer', [WriterController::class, 'show']);
