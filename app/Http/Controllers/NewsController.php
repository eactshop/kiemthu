<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;




class NewsController extends Controller
{
    public function __construct()
    {
        
    }
    public function getNews($id){
        $news = News::find($id);
        $other_news = News::orderBy('id', 'desc')->take(7)->get();
        return view('full-news', compact('news','other_news'));
    }
    public function index()
    {
        $news = News::select('id', 'news_title', 'news_date', 'news_img', 'news_content')->get();
        return view('news', compact('news'));
    }
}
