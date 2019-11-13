<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryVariation extends Model
{
    protected $fillable = ['parent', 'category_id', 'variant_id', 'type' ];
}
