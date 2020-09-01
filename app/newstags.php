<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class newstags extends Model
{
    //
    public static function getAllTags() {

        //return $this->belongsTo('App\User');

//        $lastnews = DB::table('news')
//            ->latest()
//            ->limit(3)
//            ->get();
//        return $lastnews;
        return static::all();
    }
}
