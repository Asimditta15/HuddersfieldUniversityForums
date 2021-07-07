<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index()
    {
        $currentURL = url()->current();

        $str = $currentURL;
        preg_match_all('!\d+!', $str, $int);

        $firstelm = array_values(array_slice($int, -1))[0];
        $lastelm = array_values(array_slice($firstelm, -1))[0];

        $posts = posts::select('threads.id', 'posts.threadid', 'Posts.title', 'Posts.message', 'posts.id as postid')
            ->join('threads', 'Posts.threadid', '=', 'threads.id')
            ->where('Posts.threadid', '=', $lastelm )
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
