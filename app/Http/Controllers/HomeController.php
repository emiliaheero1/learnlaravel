<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('index');

    }

    public function articles()
    {

        $articles = Article::paginate(16);

        return view('articles', compact('articles'));
    }

    public function  article(Article $article){
        return view("article", compact("article"));
        }

}

