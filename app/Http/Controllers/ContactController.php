<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecontactRequest;
use App\Models\contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contact = contact::all();
        return view('admin.contacts.index',compact('contact'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecontactRequest $request)
    {
        contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        return view('admin.contacts.show',compact('contact'));
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contact.index');
    }
}
