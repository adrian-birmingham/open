<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'review', 'approved',
	'attraction_id', 'approved',
	'uers_id', 'approved',
	'rating', 'approved',
    ];
}

