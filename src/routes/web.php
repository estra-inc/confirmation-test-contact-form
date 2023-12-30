<?php

use App\Http\Controllers\ContactController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/admin', function () {
  $categories = Category::all();
  return view('admin', compact('categories'));
});
