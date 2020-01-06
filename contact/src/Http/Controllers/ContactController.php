<?php

namespace Mustafa\FirstPackage\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mustafa\FirstPackage\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $config = config('contact.send_email_to');

        return view('first-package::contact', compact('config'));
    }

    public function message(Request $request)
    {
        Contact::create($request->all());

        return redirect(route('contact', compact(config('contact.send_email_to'))));
    }
}
