<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SliderPosition extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $appends = [
        'name',
        'pagetitle',
      
    ];

    public function getNameAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en ;
    }
    
    
    public function getPageTitleAttribute()
    {
        return app()->isLocale('ar') ? $this->pagetitle_ar : $this->pagetitle_en ;
    }
  

    public function sliders()
    {
        return $this->hasMany(Slider::class, 'position_id', 'id');
    }
}
