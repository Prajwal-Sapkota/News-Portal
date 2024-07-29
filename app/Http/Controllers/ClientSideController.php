<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\News;
use Illuminate\Http\Request;

class ClientSideController extends Controller
{
    public function index()
    {
        $banners = Banner::where('status',1)->get();
        $news = News::where('status', 1)->with('newscategory') ->orderBy('published_date', 'desc')->take(10)->inRandomOrder()->take(4)->get(); 
        $allnews = News::where('status', 1)->with('newscategory')->orderBy('published_date', 'desc')->get();
        return view('index', compact('banners','news','allnews'));
    }
    
}
