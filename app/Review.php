<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

#use CoenJacobs\EloquentCompositePrimaryKeys\HasCompositePrimaryKey;

class Review extends Model
{

	#use HasCompositePrimaryKey;

	##protected $primaryKey = array('attraction_id', 'uers_id');
/*
    protected function setKeysForSaveQuery(Builder $query)
    {
        $query
            ->where('attraction_id', '=', $this->getAttribute('attraction_id'))
            ->where('uers_id', '=', $this->getAttribute('uers_id'));
        return $query;
    }

 */


       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'review', 'approved', 'user_id', 'attraction_id', 'rating',
    ];


}
