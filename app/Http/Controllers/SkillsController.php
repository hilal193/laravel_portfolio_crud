<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        // $afficheSkills = Skill::all();
        $paginationSkills = Skill::orderBy("created_at","desc")->paginate(5);

        return view("admin.skills.index",compact("paginationSkills"));
        // return view("admin.skills.index",compact("afficheSkills","paginationSkills"));
    }
    public function create()
    {
        return view("admin.skills.create");
    }
    public function store(Request $request)
    {
        request()->validate([
            "nom"=>["required"],
            "image"=>["required"]
        ]);
        $skills = new Skill();
        $skills->nom = $request->nom;
        $skills->image = $request->image;
        // $skills->description = $request->description;
        // $skills->niveau = $request->niveau;
        $skills->save();
        return redirect()->route("skills.index");
        // return redirect()->back();

    }
    public function destroy(Skill $id)
    {
        $id->delete();
        return redirect()->back();
    }

    public function show(Skill $skills)
    {
        return view("admin.skills.show",compact("skills"));
        // dd($works);
    }
    public function edit(Skill $skills)
    {
        return view("admin.skills.edit",compact("skills"));
    }

    public function update(Skill $skills, Request $request)
    {
        // dump($skills);
        // dd($request);
        $skills -> nom = $request->nom;
        $skills->image = $request->image;
        // $skills -> description = $request->description;
        // $skills -> niveau = $request->niveau;
        $skills -> save();
        return redirect()->back();
    }
}
