<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
//
    function index() {
        //$newsobj = new App\news;
        //return view('pages.admin', compact('news'));
        return view('pages.admin');
    }

    function create() {
        return view('pages.createarticle');
    }
}
