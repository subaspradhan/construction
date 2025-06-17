<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Service;
use App\Models\Gallery;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Price;
use App\Models\Enquary;
use App\Models\Awards;

class FrontendController extends Controller
{
    public function index(){
        $banner = Banner::latest()->get();
        $service = Service::latest()->limit(3)->get();
        $gallery = Gallery::latest()->limit(8)->get();
        $testi = Testimonial::latest()->get();
        $partner = Partner::latest()->get();
        $award = Awards::first();
        return view('frontend.index', compact('banner','service','gallery','testi','partner','award'));
    }

    public function projectindex(){
        $project = Project::latest()->paginate(8);
        return view('frontend.project', compact('project'));
    }

    public function projectdetails($id){
        $project = Project::find($id);
        return view('frontend.projectdetails', compact('project'));
    }

    public function serviceindex(){
        $service = Service::latest()->get();
        return view('frontend.service', compact('service'));
    }

    public function servicedetails($name){
        $currentService = Service::where('name', $name)->first();
        $service = Service::where('name', $name)->first();
        $services = Service::all();
        return view('frontend.servicedetails', compact('service','services','currentService'));
    }

    public function galleryindex(){
        $gallery = Gallery::latest()->get();
        return view('frontend.gallery', compact('gallery'));
    }

    public function partnerindex(){
        $partnerbanking = Partner::where('type', 'banking')->latest()->get();
        $partnerconstruction = Partner::where('type', 'construction')->latest()->get();
        return view('frontend.partner',compact('partnerbanking','partnerconstruction'));
    }

    public function about(){
        $gallery = Gallery::all();
        return view('frontend.about',compact('gallery'));
    }    

    public function contact(){
        return view('frontend.contact');
    }

    public function priceindex(){
        $price = Price::latest()->get();
        return view('frontend.price', compact('price'));
    }

    public function enquaryindex($id){
        $price = Price::find($id);
        return view('frontend.enquary', compact('price'));
    }
}
