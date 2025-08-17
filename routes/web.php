<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Redirect root to students index
Route::get('/', function () {
    return redirect()->route('students.index');
});

// Resource routes for CRUD
Route::resource('students', StudentController::class);
