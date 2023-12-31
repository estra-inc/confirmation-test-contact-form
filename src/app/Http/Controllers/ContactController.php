<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

    function confirm(ContactRequest $request) {
        $contacts = $request->all();
        $category = Category::find($request->category_id);
        return view('confirm', compact('contacts', 'category'));
    }

    function store(ContactRequest $request) {
        if ($request->has('back')) {
            return redirect('/')->withInput();
        }

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

    public function destroy(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/admin');
    }
}
