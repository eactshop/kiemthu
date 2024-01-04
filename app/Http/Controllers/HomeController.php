<?php

namespace App\Http\Controllers;

use App\Models\News;

class HomeController extends Controller
{
    public function __construct()
    {

    }
    public function index()
    {
        $news = News::select('id', 'news_title', 'news_date', 'news_img', 'news_content')
            ->orderBy('id', 'desc')
            ->take(8)
            ->get();
        return view('home', compact('news'));
    }
}
