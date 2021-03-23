<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        return view('backend.pages.blog.index');
    }

    public function category(){
        return view('backend.pages.blog.category_index');
    }
}
