<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approach extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
   

    // Accessors

    public function getTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->title_ar : $this->title_en ;
    }
    
    public function getBodyAttribute()
    {
        return app()->isLocale('ar') ? $this->body_ar : $this->body_en ;
    }
    public function getPageTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->pagetitle_ar : $this->pagetitle_en ;
    }
}
