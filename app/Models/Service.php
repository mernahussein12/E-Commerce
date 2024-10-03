<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Accessors

    public function getExpAttribute()
    {
        return app()->isLocale('ar') ? $this->exp_ar : $this->exp_en ;
    }
    
    public function getBodyAttribute()
    {
        return app()->isLocale('ar') ? $this->body_ar : $this->body_en ;
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
        return $this->belongsTo(CategoryService::class,'category_id');

        
    }




}
