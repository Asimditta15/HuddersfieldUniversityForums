<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function index()
    {
        $forums = forum::all ();

        return view('home', compact('forums'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Forum $forum)
    {
        //
    }


    public function edit(Forum $forum)
    {
        //
    }


    public function update(Request $request, Forum $forum)
    {
        //
    }


    public function destroy(Forum $forum)
    {
        //
    }
}
