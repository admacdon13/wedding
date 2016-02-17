<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    //things that can be changed
    protected $fillable = [
        'first',
        'last',
        'comment',
        'response',
        'published_at',
    ];

    // protected
    protected $dates = ['published_at'];

    // query scopes

    /**
     * @param $query
     */
    public function scopePublished($query)
    {

        $query->where('published_at', '<=', Carbon::now());

    }

    /**
     * @param $query
     */
    public function scopeUnpublished($query)
    {

        $query->where('published_at', '>', Carbon::now());

    }

    // Setters | Mutators

    /**
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);

    }

}
