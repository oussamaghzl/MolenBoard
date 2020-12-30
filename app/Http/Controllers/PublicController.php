<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('frontend.accueil');
    }
    public function index2()
    {
        return view('frontend.classe');
    }
    public function index21()
    {
        return view('frontend.section.Eleve');
    }
    public function index22()
    {
        return view('frontend.section.Calendar');
    }
    public function index23()
    {
        return view('frontend.section.Exercice');
    }
    public function index4()
    {
        return view('frontend.contact');
    }
    public function index5()
    {
        return view('frontend.profil');
    }
}
