<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\article;

class articlecontroller extends Controller
{
    public function index()
    {
        $articles=article::orderby('id','DESC')->paginate(5);
        $tittle = "halaman artikel";
        
        return view('article.manage.index',
        ["articles" => $articles,
        "tittle" => $tittle]);
    }

    public function create()
    {
        $categories=category::get();
        return view('article.manage.create',compact('categories'));
    }
        
    public function store(Request $request)
    {
        $articles=article::create([
            'category_id'=>$request->category,
            'title'=>$request->title,
            'content'=>$request->content
        ]);
        
        return back()->with('success','posting kontol sukses!');
    }

    public function edit($id)
    {
        $categories=category::get();
        $articles=article::find($id);
        return view('article.manage.edit', compact('categories','articles'));
    }

    public function update(Request $request, $id)
    {
        $articles=article::whereId($id)->first();
        $articles->update([
            'category_id'=>$request->category,
            'title'=>$request->title,
            'content'=>$request->content,
        ]);
        return back()->with('success','Ubah Data Suksessssss!');
    }

    public function destroy($id)
    {
        article::whereId($id)->delete();
        return back()->with('success', 'Hapus Data Suksess!');
    }

    public function show($id)
    {
        $articles=article::whereId($id)->first();
        return view('article.show', compact('articles'));
    }
}


//view("nama alamat nya", "data yang dipassing")
