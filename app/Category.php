<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Category extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;
    

    protected $fillable = [
        'label', 'slug', 'meta_title', 'meta_tag', 'meta_description',
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
                'source' => 'label'
            ]
        ];
    }


    public function category_parent()
    {
       return $this->belongsTo('App\Category','parent');
    }

    public function category_subparent()
    {
       return $this->belongsTo('App\Category','subparent');
    }

    public function subCategory()
    {
         return $this->hasMany('App\Category','parent')->where('parent','>',0)->where('subparent',0);
    }

    public function childCategory()
    {
         return $this->hasMany('App\Category','subparent')->where('parent','>',0)->where('subparent','>',0);
    }


# category variants Brand

    public function categoryBrands()
    {
        return $this->hasMany('App\CategoryVaritant','category_id')->where('variantKey','brands');
    }

# category variants CategoryTechniques
    public function CategoryTechniques()
    {
        return $this->hasMany('App\CategoryVaritant','category_id')->where('variantKey','techniques');
    }


# category variants CategoryModels
    public function CategoryModels()
    {
        return $this->hasMany('App\CategoryVaritant','category_id')->where('variantKey','models');
    }



# category variants CategorySizes
    public function CategorySizes()
    {
        return $this->hasMany('App\CategoryVaritant','category_id')->where('variantKey','sizes');
    }

# category variants CategoryStyles
    public function CategoryStyles()
    {
        return $this->hasMany('App\CategoryVaritant','category_id')->where('variantKey','styles');
    }


# category variants CategoryMaterials
    public function CategoryMaterials()
    {
        return $this->hasMany('App\CategoryVaritant','category_id')->where('variantKey','materials');
    }



}
