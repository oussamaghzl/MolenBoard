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

}
