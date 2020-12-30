<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','index4');
    }
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
        $compteur = 1;
        $eleve = User::all();
        return view('frontend.section.Eleve',compact('eleve','compteur'));
    }
    public function index22()
    {
        return view('frontend.section.Calendar');
    }
    public function index23()
    {
        $compteur = 1;
        return view('frontend.section.Exercice',compact('compteur'));
    }
    public function index4()
    {
        return view('frontend.contact');
    }
    public function index5()
    {
        $role = Role::all();
        return view('frontend.profil',compact('role'));
    }
}
