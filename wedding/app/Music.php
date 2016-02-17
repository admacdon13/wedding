<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    //things that can be changed
    protected $fillable = [
        'artist',
        'song',
        'comment',
        'chosenby',
//        'response',
//        'imageName',
//        'imagePath',
    ];


//public function setImagePath($rsvp ,$path)
//{
//
//    $rsvp->['imagePath' => $path];
//
//
//
//}


//
//    protected $dates = ['published_at'];
//
//    // query scopes
//
//    public function scopePublished($query)
//    {
//
//        $query->where('published_at', '<=', Carbon::now());
//
//    }
//
//    public function scopeUnpublished($query)
//    {
//
//        $query->where('published_at', '>', Carbon::now());
//
//    }
//
//    public function setPublishedAtAttribute($date)
//    {
//        $this->attributes['published_at'] = Carbon::parse($date);
//
//    }

}
