<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $currentURL = url()->current();
        $lastCharPosition = strlen($currentURL) - 1;
        for ($x = $lastCharPosition; $x < strlen($currentURL); $x++) {
            $newString = $currentURL[$x];
        }

        $posts = posts::select('Posts.id', 'Posts.title', 'Posts.message')
            ->join('threads', 'Posts.threadid', '=', 'threads.id')
            ->where('Posts.threadid', '=', $newString )
            ->get();

        return view ('posts', compact('posts'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Posts $posts)
    {
        //
    }


    public function edit(Posts $posts)
    {
        //
    }


    public function update(Request $request, Posts $posts)
    {
        //
    }


    public function destroy(Posts $posts)
    {
        //
    }
}
