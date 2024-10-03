<?php

namespace App\Providers;

use App\Models\CategoryBlog;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Models\CategoryService;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $cat_service = CategoryService::all();
         View::share('cat_service', $cat_service);

          $homesliders=DB::table('sliders')->where('position_id',1)->get();
        View::share('homesliders',$homesliders);


        $blogs_cat = CategoryBlog::all();
        View::share('blogs_cat', $blogs_cat);

    }

}
