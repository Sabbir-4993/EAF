<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPagesController extends Controller
{
    public function index(){
        return view('frontend.pages.index');
    }

    public function about(){
        return view('frontend.pages.about');
    }

    public function contact(){
        return view('frontend.pages.contact');
    }

    public function recipes(){
        return view('frontend.pages.recipes');
    }

    public function recipe_details(){
        return view('frontend.pages.recipe_details');
    }

    public function howtoorder(){
        return view('frontend.pages.howtoorder');
    }

    public function partners(){
        return view('frontend.pages.partners');
    }

    public function partner_with_us(){
        return view('frontend.pages.partner_with_us');
    }

    public function add_restaurant(){
        return view('frontend.pages.add_restaurant');
    }

    public function blog(){
        return view('frontend.pages.blog');
    }

    public function blog_details(){
        return view('frontend.pages.blog_details');
    }
}
