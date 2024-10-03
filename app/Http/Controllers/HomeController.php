<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Contact;
use App\Models\Mission;
use App\Models\Gallery;
use App\Models\Client;
use App\Models\Slider;
use App\Models\NewSlider;
use App\Models\SliderPosition;
use App\Models\Team;
use App\Models\Approach;
use App\Models\Blog;
use App\Models\About;
use App\Models\CategoryGallery;
use App\Models\CategoryBlog;
use App\Models\CategoryService;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        return view('home');
    }

    public function managerDashboard()
    {
        return view('backend.home');
    }

    public function superAdminDashboard()
    {
        return view('super_admin_dashboard');
    }


    public function ServiceFront()
    {
        $services = Service::all();
        $slider = Slider::where('position_id', '2')->get();
        //dd($services->toArray());
        $categoreis = CategoryService::all();
        return view('pages_website.services', compact('services', 'categoreis', 'slider'));
    }


    public function BlogFront()
    {
        $blogs = Blog::all();
        $slider = Slider::where('position_id', '2')->get();
        //dd($services->toArray());
        $categoreis = CategoryBlog::all();
        return view('pages_website.blog', compact('blogs', 'categoreis', 'slider'));
    }

    public function GalleryFront()
    {
        $gallries = Gallery::all();
        $slider = Slider::where('position_id', '2')->get();
        //dd($services->toArray());
        $categoreis = CategoryGallery::all();
        return view('pages_website.gallary', compact('gallries', 'categoreis', 'slider'));
    }

    public function ContactsFront()
    {
        $contacts = Contact::all();
        $slider = Slider::where('position_id', '2')->get();
        return view('pages_website.contact_us', compact('contacts', 'slider'));
    }

    // public function MissionFront()
    // {
    //     $missions = Mission::all();
    //     $slider = Slider::where('position_id', '2')->get();
    //     return view('pages_website.mission', compact('missions', 'slider'));
    // }

    public function TeamFront()
    {
        $teams = Team::all();
        $slider = Slider::where('position_id', 6)->get();
        return view('pages_website.our_team', compact('teams', 'slider'));
    }

    public function HomeFront()
    {
        $sliders = Slider::all();
        $slider = Slider::where('position_id', 6)->get();
        $newSliders = NewSlider::whereStatus(1)->get();
        $teams = Team::all();
        return view('pages_website.body', compact('sliders', 'slider','newSliders','teams'));
    }

    // public function ApproachFront()
    // {
    //     $approaches = Approach::all();
    //     $slider = Slider::where('position_id', 6)->get();
    //     return view('pages_website.home', compact('approaches', 'slider'));
    // }


   public function clientsFront()
    {
        $clients = Client::all();
        $slider = Slider::where('position_id', 6)->get();
        return view('pages_website.client', compact('clients', 'slider'));
    }


    public function AboutFront()
    {
        $abouts = About::all();
        $slider = Slider::where('position_id', 6)->get();
        return view('pages_website.about_us', compact('abouts', 'slider'));
    }
}
