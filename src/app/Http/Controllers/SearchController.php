<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->has('reset')) {
            return redirect('/admin')->withInput();
        }
        $query = Contact::query();

        if(!empty($request->keyword)) {
            $query->where('first_name', 'like', '%' . $request->keyword . '%')
                ->orWhere('last_name', 'like', '%' . $request->keyword . '%')
                ->orWhere('email', 'like', '%' . $request->keyword . '%');
        }

        if (!empty($request->gender)) {
            $query->where('gender', '=', $request->gender);
        }

        if (!empty($request->category_id)) {
            $query->where('category_id', '=', $request->category_id);
        }

        if (!empty($request->date)) {
            $query->whereDate('created_at', '=', $request->date);
        }

        // $query->dd();
        $contacts = $query->simplePaginate(5);
        // dd($contacts);
        $categories = Category::all();
        return view('admin' , compact('contacts', 'categories'));
    }
}
