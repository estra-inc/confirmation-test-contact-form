<?php

use App\Http\Controllers\ContactController;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);

Route::middleware('auth')->group(function () {
  Route::get('/admin', function () {
    $contacts = Contact::with('category')->simplePaginate(5);
    $csvData = Contact::all();
    $categories = Category::all();
    return view('admin', compact('contacts', 'categories', 'csvData'));
  });
  Route::post('/search', [ContactController::class, 'search']);
  Route::post('/delete', [ContactController::class, 'destroy']);
  Route::get('/export', [ContactController::class, 'export']);
});