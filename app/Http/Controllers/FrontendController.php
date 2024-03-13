<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
    public function aboutus(){
        return view('frontend.aboutus');
    }
    public function cyberSecurity(){
        return view('frontend.cyberSecurity');
    }
    public function cyberStrategy(){
        return view('frontend.cyberStrategy');

    }
    public function network_detective(){
        return view('frontend.network_detective');

    }
    public function partner(){
        return view('frontend.partner');

    }
    public function previous_experience(){
        return view('frontend.previous_experience');

    }
    public function products_video(){
        return view('frontend.products_video');

    }
    public function products(){
        return view('frontend.products');

    }
    public function seminar(){
        return view('frontend.seminar');

    }
    public function services(){
        return view('frontend.services');

    }

    public function training(){
        return view('frontend.training');

    }
    public function vpentest(){
        return view('frontend.vpentest');

    }
    public function vulnerability_scanner(){
        return view('frontend.vulnerability_scanner');

    }
    public function contact(){
        return view('frontend.contact');

    }

}
