<?php

namespace App;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{

    use Translatable;
    protected $fillable = ['image'];

    protected $appends = ['image_path'];


    public $translatedAttributes = ['title', 'description'];


    public function getImagePathAttribute()
    {

        return asset('uploads/news_image/'.$this->image);

    }//end of image

}//end of model
