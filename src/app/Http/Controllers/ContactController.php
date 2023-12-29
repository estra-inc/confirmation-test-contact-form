<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

    function confirm(Request $request) {
        $contacts = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel',
            'address',
            'building',
            'detail',
            'content',
        ]);
        $content = Category::find($request->category_id);
        return view('confirm', compact('contacts', 'content'));
    }
}
