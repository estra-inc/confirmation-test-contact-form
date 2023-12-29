<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

    function confirm(ContactRequest $request) {
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
        $category = Category::find($request->category_id);
        return view('confirm', compact('contacts', 'category'));
    }

    function store(ContactRequest $request) {
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
