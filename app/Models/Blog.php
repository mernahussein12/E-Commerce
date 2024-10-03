<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
  

    // Accessors

   
    public function getBodyAttribute()
    {
        return app()->isLocale('ar') ? $this->body_ar : $this->body_en ;
    }
    
    
    
    public function getTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->title_ar : $this->title_en ;
    }
    
    
    
    
    public function getNameAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en ;
    }
    
    
    
    public function getPageTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->pagetitle_ar : $this->pagetitle_en ;
    }
    
    
    
     public function category()
    {
        return $this->belongsTo(CategoryBlog::class,'category_id');
    }
}
