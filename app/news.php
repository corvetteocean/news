<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class news extends Model
{
    //
    public function newsandtags() {

        //return $this->belongsTo('App\User');

//        $lastnews = DB::table('news')
//            ->latest()
//            ->limit(3)
//            ->get();
//        return $lastnews;
        //return static::all();
       // return $this->hasMany('App\newsandtags', 'news_id');
        return $this->belongsTo('App\newsandtags', 'news_id');
    }
}
