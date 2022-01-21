<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Projet;
use App\Models\Skill;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
      return view('home');
    }
    public function about()
    {
       $about = About::all();
       return view('pages.about',compact("about"));
    }
    public function contact()
    {
       $contact = Contact::all();
       return view('pages.contact',compact("contact"));
    }
    public function resume()
    {
       return view('pages.resume');
    }
    public function services()
    {
       return view('pages.services');
    }
    public function testimonials()
    {
       return view('pages.testimonials');
    }
    // public function welcome()
    // {
    //    return view('pages.welcome');
    // }
    public function skills()
    {
       $skill = Skill::all();
       return view('pages.skills',compact("skill"));
    }
    public function works()
    {
       $works = Projet::all();
       return view('pages.works',compact("works"));
    }
    public function dashboard()
    {
       return view('admin.dashboard');
    }

}
