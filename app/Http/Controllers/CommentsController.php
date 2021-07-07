<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

class CommentsController extends Controller
{

    public function index()
    {
        $currentURL = url()->current();
        $lastCharPosition = strlen($currentURL) - 1;
        for ($x = $lastCharPosition; $x < strlen($currentURL); $x++) {
            $newString = $currentURL[$x];
        }

        $comments = comments::select('posts.id', 'posts.title', 'users.name', 'comments.memberid', 'comments.postsid', 'comments.message')
            ->join('posts', 'comments.postsid', '=', 'posts.id')
            ->join('users', 'comments.memberid', '=', 'users.id')
            ->where('posts.id', '=', $newString )
            ->get();

        return view ('comments', compact('comments'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        request () -> validate ([
            'memberid' => 'required|min:0|max:32',
            'postsid' => 'required|min:0|max:32',
            'message' => 'required|min:2|max:128'
        ]);

        $attributes = $request -> all (
            'memberid',
            'postsid',
            'message'
        );

        $comments = comments::create ($attributes);

        return redirect (url()->current());
    }


    public function show(Comments $comments)
    {
        //
    }


    public function edit(Comments $comments)
    {
        //
    }


    public function update(Request $request, Comments $comments)
    {
        //
    }


    public function destroy(Comments $comments)
    {
        //
    }
}
