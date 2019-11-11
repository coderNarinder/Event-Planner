<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorCategory extends Model
{
    public function category()
    {
       return $this->belongsTo('App\Category','category_id');
    }


    public function subcategory()
    {
       return $this->hasMany('App\VendorCategory','parent');
    }












}
