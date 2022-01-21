<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        $afficheWorks = Projet::all();
        return view("admin.works.index",compact("afficheWorks"));
    }
    public function create()
    {
        return view("admin.works.create");
    }
    public function store(Request $request)
    {
        $projet = new Projet();
        $projet->image = $request->image;
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        $projet->save();
        return redirect()->route("works.index");
        // return redirect()->back();

    }
    // public function affichage()
    //     {
    //         $afficheWorks = Projet::all();
    //         return view("admin.works.affichage",compact("afficheWorks"));
    //     }
    public function destroy(Projet $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function show(Projet $works)
    {
        return view("admin.works.show",compact("works"));
        // dd($works);
    }
    public function edit(Projet $works)
    {
        return view("admin.works.edit",compact("works"));
    }
    public function update(Projet $works, Request $request)
    {
        // dump($works);
        // dd($request);
        $works -> titre = $request->titre;
        $works -> image = $request->image;
        $works -> description = $request->description;
        $works -> save();
        return redirect()->back();
    }
}
