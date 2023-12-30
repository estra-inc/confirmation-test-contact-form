<?php

use App\Http\Controllers\ContactController;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);
Route::get('/admin', function () {
  $contacts = Contact::Paginate(3);
  $categories = Category::all();
  return view('admin', compact('contacts', 'categories'));
});
