<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    public function getPathAttribute () {
        return $this -> path ();
    }

    public function path ()
    {
        return '/threads/posts/comments/' . $this -> postid;
    }

}
