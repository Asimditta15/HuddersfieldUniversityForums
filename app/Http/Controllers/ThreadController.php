<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{

    public function index()
    {
        $currentURL = url()->current();
        $lastCharPosition = strlen($currentURL) - 1;
        for ($x = $lastCharPosition; $x < strlen($currentURL); $x++) {
            $newString = $currentURL[$x];
        }

        $threads = thread::select('threads.id', 'threads.title', 'threads.message')
            ->join('forums', 'threads.forumsid', '=', 'forums.id')
            ->where('forums.id', '=', $newString )
            ->get();

        return view ('threads', compact('threads'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Thread $thread)
    {
        //
    }


    public function edit(Thread $thread)
    {
        //
    }


    public function update(Request $request, Thread $thread)
    {
        //
    }


    public function destroy(Thread $thread)
    {
        //
    }
}
