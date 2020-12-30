<?php

namespace App\Http\Controllers;

use App\Models\Exercice;
use App\Models\Classe;
use Illuminate\Http\Request;


class ExerciceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classe = Classe::all();
        $exo = Exercice::all();
        return view('backend.exercice-admin', compact('exo', 'classe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Exercice;

        $store->nom = $request->nom;
        $store->classe_id = $request->classe;
        $store->fichier = $request->file('fichier')->hashName();
        $store->save();
        $request->file('fichier')->storePublicly('fichier', 'public');
        

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function show(Exercice $exercice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function edit(Exercice $exercice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exercice $exercice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exercice  $exercice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exercice $exercice)
    {
        //
    }

    public function download($id)
    {
        $download = Exercice::find($id);
        return Storage::disk('public')->download('fichier'.$download->fichier);
    }
}
