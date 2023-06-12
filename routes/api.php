<?php
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\ContactController;
 
 
Route::get('/contacts',[App\Http\Controllers\ContactController::class, 'index']);
 
Route::post('/save',[App\Http\Controllers\ContactController::class, 'store']);
 
Route::put('/update/{id}',[App\Http\Controllers\ContactController::class, 'update']);
 
Route::delete('/delete/{id}',[App\Http\Controllers\ContactController::class, 'destroy']);
 
 
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});