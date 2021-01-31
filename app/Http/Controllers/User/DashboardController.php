<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
//    user dashboard
    public function dashboard(){
        return view('frontend.user.dashboard');
    }


//    main website
//    public function index(){
//        return view('frontend.pages.index');
//    }
//
//    public function about(){
//        return view('frontend.pages.about');
//    }
//
//    public function contact(){
//        return view('frontend.pages.contact');
//    }
//
//    public function recipes(){
//        return view('frontend.pages.recipes');
//    }
//
//    public function recipe_details(){
//        return view('frontend.pages.recipe_details');
//    }
//
//    public function howtoorder(){
//        return view('frontend.pages.howtoorder');
//    }
//
//    public function partners(){
//        return view('frontend.pages.partners');
//    }
}
