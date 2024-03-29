<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function main(){
        return view('pages.main');
    }
    public function about(){
        return view('pages.about');
    }
    public function shop(){
        return view('pages.shop');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function design(){
        return view('pages.design');
    }
}
