<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use Sluggable;
    

    protected $fillable = [
        'name', 'description',
    ];
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    public function sluggable()
    {
        return [

            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    
}
