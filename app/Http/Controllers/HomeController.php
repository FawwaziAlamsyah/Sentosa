<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\article;

class HomeController extends Controller
{
    //
    public function index()
    {
        $articles=article::inRandomOrder()->orderBy('id','DESC')->paginate(5);
        return view('home', compact('articles'));
    }
}
