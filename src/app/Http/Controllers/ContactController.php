<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

    function confirm(Request $request) {
        $contacts = $request->only([
            'category_id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel_1',
            'tel_2',
            'tel_3',
            'address',
            'building',
            'detail',
        ]);
        return view('confirm', compact('contacts'));
    }

    function store(Request $request) {
        $request['tell'] = $request->tel_1 . $request->tel_2 . $request->tel_3;
        Contact::create($request->only([
                'category_id',
                'first_name',
                'last_name',
                'gender',
                'email',
                'tell',
                'address',
                'building',
                'detail',
            ])
        );
        return view('thanks');
    }
}
