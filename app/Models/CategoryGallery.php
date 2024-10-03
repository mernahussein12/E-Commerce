<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryGallery extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    

    public function getNameAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en ;
    }
    
    public function getTextAttribute()
    {
        return app()->isLocale('ar') ? $this->text_ar : $this->text_en ;
    }
    
    public function galleries()
    {
        return $this->hasMany(Gallery::class,'category_id');
    }
    
    public function getPageTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->pagetitle_ar : $this->pagetitle_en ;
    }
}
