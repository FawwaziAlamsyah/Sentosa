<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "tittle" => "posts",
            "posts" => post::all()
        ]);
    }

    public function show(post $post)
    {
        return view('post', [
            "tittle" => "singel post",
            "post" => $post
        ]);
    }
}
