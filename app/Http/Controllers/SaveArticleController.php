<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaveArticleController extends Controller
{
    public function index() {
        $articlecategories = DB::table('categoriesarticles')->distinct()->get();

        return view('pages.createarticle', compact('articlecategories'));
    }

    //
    public function postIndex(Request $request) {
        print('<pre>');
        print_r($request->input('description'));
        print('</pre>');

        DB::table('articles')->insert(
            ['article_title' => 'john@example.com', 'article_body' => $request->input('description'),
                'category_id' => '44' ]
        );
    }
}
