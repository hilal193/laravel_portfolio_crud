<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
      return view('home');
    }
    public function about()
    {
       return view('pages.about');
    }
    public function contact()
    {
       return view('pages.contact');
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
       return view('pages.skills');
    }
    public function works()
    {
       return view('pages.works');
    }
    public function dashboard()
    {
       return view('admin.dashboard');
    }

}
