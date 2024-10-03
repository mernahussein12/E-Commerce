<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
 

    public function getTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->title_ar : $this->title_en ;
    }
    public function getPageTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->pagetitle_ar : $this->pagetitle_en ;
    }
   
    public function category()
    {
        return $this->belongsTo(CategoryGallery::class,'category_id');
    }
}
