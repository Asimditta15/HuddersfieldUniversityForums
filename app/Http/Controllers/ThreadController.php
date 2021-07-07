<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{

    public function index()
    {
        $currentURL = url()->current();

        $str = $currentURL;
        preg_match_all('!\d+!', $str, $int);

        $firstelm = array_values(array_slice($int, -1))[0];
        $lastelm = array_values(array_slice($firstelm, -1))[0];

        $threads = thread::select('threads.id', 'threads.title', 'threads.message')
            ->join('forums', 'threads.forumsid', '=', 'forums.id')
            ->where('forums.id', '=', $lastelm )
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
