<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $afficheAbout = About::all();
        return view("admin.about.index",compact("afficheAbout"));
    }
    public function create()
    {
        return view("admin.about.create");
    }
    public function store(Request $request)
    {
        $projet = new About();
        $projet->image = $request->image;
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        $projet->save();
        return redirect()->route("about.index");
        // return redirect()->back();
    }
    public function destroy(About $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function show(About $about)
    {
        return view("admin.about.show",compact("about"));
        // dd($about);
    }
    public function edit(About $about)
    {
        return view("admin.about.edit",compact("about"));
    }
    public function update(About $about, Request $request)
    {
        // dump($about);
        // dd($request);
        $about -> titre = $request->titre;
        $about -> image = $request->image;
        $about -> description = $request->description;
        $about -> save();
        return redirect()->back();
    }
}
