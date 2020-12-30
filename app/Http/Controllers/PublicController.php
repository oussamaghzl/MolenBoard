<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Exercice;

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
        $datas = User::all();
        return view('frontend.section.Eleve');
    }
    public function index22()
    {
        return view('frontend.section.Calendar');
    }
    public function index23()
    {
        $datas = Exercice::all();
        return view('frontend.section.Exercice', compact('datas'));
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
