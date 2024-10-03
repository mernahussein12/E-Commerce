<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryBlog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
   
    public function getNameAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en ;
    }
    
    
      public function getBodyAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en ;
    }  
    
    
    
    public function blogs()
    {
        return $this->hasMany(Blog::class,'category_id');
    }
    
    
    public function getPageTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->pagetitle_ar : $this->pagetitle_en ;
    }
}
