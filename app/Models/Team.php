<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
 

    public function getNameAttribute()
    {
        return app()->isLocale('ar') ? $this->name_ar : $this->name_en ;
    }
    public function getAddressAttribute()
    {
        return app()->isLocale('ar') ? $this->address_ar : $this->address_en ;
    }
    public function getSummaryAttribute()
    {
        return app()->isLocale('ar') ? $this->summary_ar : $this->summary_en ;
    }
    public function getSpecAttribute()
    {
        return app()->isLocale('ar') ? $this->spec_ar : $this->spec_en ;
    }
    public function getExpAttribute()
    {
        return app()->isLocale('ar') ? $this->exp_ar : $this->exp_en ;
    }
    public function getSkillsAttribute()
    {
        return app()->isLocale('ar') ? $this->skills_ar : $this->skills_en ;
    }
    public function getEducationAttribute()
    {
        return app()->isLocale('ar') ? $this->education_ar : $this->education_en ;
    }
       public function getJobAttribute()
    {
        return app()->isLocale('ar') ? $this->job_ar : $this->job_en ;
    }
    protected $guarded = ['id'];
}
