<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function index()
    {
        # code...
    }
    public function store(Request $request)
    {
        $projet = new Projet();
        $projet->image = $request->image;
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        $projet->save();
        return redirect()->route("works");
    }
}
