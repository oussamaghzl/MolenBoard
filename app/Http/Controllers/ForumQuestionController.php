<?php

namespace App\Http\Controllers;

use App\Models\ForumQuestion;
use Illuminate\Http\Request;
use App\Models\Forum;

class ForumQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $store = new ForumQuestion;

        $store->question = $request->question;
        $store->sujet_id = $request->sujet_id;

        $store->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumQuestion  $forumQuestion
     * @return \Illuminate\Http\Response
     */
    public function show($forumQuestion)
    {
        $reponse = ForumQuestion::find($forumQuestion);
        return view ('frontend.forum.forum-reponse', compact("reponse"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumQuestion  $forumQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumQuestion $forumQuestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumQuestion  $forumQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumQuestion $forumQuestion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumQuestion  $forumQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumQuestion $forumQuestion)
    {
        //
    }
}
