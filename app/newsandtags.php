<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newsandtags extends Model
{
    //
    public function news() {

        //return $this->belongsTo('App\User');

//        $lastnews = DB::table('news')
//            ->latest()
//            ->limit(3)
//            ->get();
//        return $lastnews;

        //return $this->hasMany('App\news', 'news_id', 'news_id');
        //return $this->belongsTo('App\news', 'news_id');
        return $this->hasMany('App\news', 'news_id');
    }
}
