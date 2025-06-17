<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Partner;
use App\Models\Price;
use App\Models\Enquary;
use App\Models\Contact;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $project = Project::count();
        $partner = Partner::count();
        $price = Price::count();
        $enquary = Enquary::count();
        $contact = Contact::count();
        $testi = Testimonial::count();
        return view('backend.index', compact('project','partner','price','enquary','contact','testi'));
    }
}
