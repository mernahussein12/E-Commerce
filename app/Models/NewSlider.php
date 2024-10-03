<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewSlider extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
  

    public function getTextAttribute()
    {
        return app()->isLocale('ar') ? $this->text_ar : $this->text_en ;
    }
    public function getPageTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->pagetitle_ar : $this->pagetitle_en ;
    }


    public function getSaleTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->saletitle_ar : $this->saletitle_en ;
    }


}

