<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $afficheContact = Contact::all();
        $paginationContact = Contact::orderBy("created_at","desc")->paginate(1);
        return view("admin.contact.index",compact("afficheContact","paginationContact"));
    }
    public function create()
    {
        return view("admin.contact.create");
    }
    public function store(Request $request)
    {
        request()->validate([
            "nom"=>["required"],
            "email"=>["required","email","unique:contacts"],
            "titre"=>["required"],
            "description"=>["required"]
        ]);
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->email = $request->email;
        $contact->titre = $request->titre;
        $contact->description = $request->description;
        $contact->save();
        return redirect()->route("contact.index");
        // return redirect()->back();
    }
    public function destroy(Contact $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function show(Contact $contact)
    {
        return view("admin.contact.show",compact("contact"));
        // dd($contact);
    }
    public function edit(Contact $contact)
    {
        return view("admin.contact.edit",compact("contact"));
    }
    public function update(Contact $contact, Request $request)
    {
        // dump($contact);
        // dd($request);
        $contact -> nom = $request->nom;
        $contact -> email = $request->email;
        $contact -> titre = $request->titre;
        $contact -> description = $request->description;
        $contact -> save();
        return redirect()->back();
    }
}
