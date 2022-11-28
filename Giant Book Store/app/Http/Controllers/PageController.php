<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function showHomePage(){
        return view('home');
    }
    public function showDetail(){
        return view('detail');
    }
    public function showCategory(){
        return view('category');
    }
    public function showContact(){
        return view('contact');
    }
    public function showPublisher(){
        return view('publisher');
    }
    public function showCategory2(){
        return view('category2');
    }
    public function showCategory3(){
        return view('category3');
    }
    public function showCategory4(){
        return view('category4');
    }


}
