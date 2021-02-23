<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        /*return $post->get();*/
        //return view('index')->with(['posts' =>$post->getByLimit()]);
        return view('index')->with(['posts' => $post->getPaginateByLimit(5)]);
    }
}
?>