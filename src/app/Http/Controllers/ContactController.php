<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        $categories = Category::all();
        return view('contact', compact('categories'));
    }
}
