<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    function index() {
        //$newsobj = new App\news;

        $news = App\newsandtags::get();
//        print("<pre>");
//        print_r($news);
//        print("</pre>");


//        $news_tags = App\news_tags::getAllTags();
//        print("<pre>");
//        print_r($news_tags);
//        print("</pre>");

        //$newstemp = new App\newsandtags;
        print("<pre>");
       print_r($news);
        print("</pre>");



        return view('pages.home', compact('news'));
    }
}
