<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    // a function created in a class called a model
    // the security type will always be public when working with models
    
    // index will be used to play all rows
    public function index () {
        // 'search' refers to <input name="search">
        // get value from query string
        // in PHP: $_GET['search']
        // in Laravel: request('search')
        $query = request('search');

        // where() method is used to liter the rows
        // get() or first() must go along with where()
        // get(): all the rows meets the where condition
        // first(): the first row meet the where condition
        // -> is used to call methods in class
        // => is used for the values of arrays
        if ($query) {
            $contacts = Contact::where('first_name', 'like', "%{$query}%")
                                ->orWhere('last_name', 'like', "%{$query}%")
                                ->get();
        } else {
            $contacts = Contact::all();
        }

        // the data is accessible im the view as viriables with the same name as the key
        // the associate array ['contacts' => $contacts] give us the access of using $contacts in this view
        return view('contacts', ['contacts' => $contacts]);
    }

    // find() method is used to retrieve a single row by it's primary key
    // the value of $id is what the segment is in URI
    // show will be display on item
    public function show ($id) {
        $contact = Contact::find($id);

        return view('contact', $contact);
    }

    public function edit ($id) {
        $contact = Contact::find($id);

        return view('edit', $contact);
    }

    public function update ($id) {
        $contact = Contact::find($id);

        $contact->first_name = request('firstName');
        $contact->last_name = request('lastName');
        $contact->email = request('email');

        $contact->save();

        return redirect("/contact/{$contact->id}");
    }

    public function destroy ($id) {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect("/");
    }

    public function create () {
        return view('new');
    }

    public function store () {
        // create a new contact instance
        $contact = new Contact();

        $contact->first_name = request('firstName');
        $contact->last_name = request('lastName');
        $contact->email = request('email');

        $contact->save();

        return redirect("/contact/{$contact->id}");
    }
}
