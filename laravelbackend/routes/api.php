<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::post('/add-student',[StudentController::class,'storeStudentsData']);
Route::get('/students',[StudentController::class,'read']);
// Route::get('/edit-student/${id}',[StudentController::class,'update']);

 
Route::get('edit/{stud_id}',[StudentController::class,'edit']);
Route::put('update/{stud_id}',[StudentController::class,'update']);
Route::get('delete/{stud_id}',[StudentController::class,'delete']);
 Route::get('view/{stud_id}',[StudentController::class,'search']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
