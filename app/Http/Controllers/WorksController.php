<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        // $afficheWorks = Projet::all();
        $paginationWorks = Projet::orderBy("created_at","desc")->paginate(2);
        return view("admin.works.index",compact("paginationWorks"));
        // return view("admin.works.index",compact("afficheWorks","paginationWorks"));
    }
    public function create()
    {
        return view("admin.works.create");
    }
    public function store(Request $request)
    {

        request()->validate([
            "image"=>["required"],
            "titre"=>["required"],
            "description"=>["required"],
            "filter"=>["required"]
        ]);
        
        $projet = new Projet();
        $projet->image = $request->image;
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        $projet->filter = $request->filter;
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
        $works -> filter = $request->filter;
        $works -> save();
        return redirect()->back();
    }
}
