<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'address', 'building', 'detail']);
        $tells = $request->only(['tell[]']);
        return view('confirm', compact('contact', 'tells'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['category_id', 'first_name', 'last_name', 'gender', 'email', 'tell', 'address', 'building', 'detail']);
        Contact::create($contact);
        return view('thanks');
    }
}
