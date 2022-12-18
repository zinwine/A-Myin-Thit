<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function threeblog()
    {
        return view('frontend.threeblog');
    }

    Public function blog()
    {
        return view('frontend.blog');
    }

    public function book()
    {
        return view('frontend.book');
    }



    public function why()
    {
        return view('frontend.whychoose');
    }

    /*Service*/

    public function safety()
    {
        return view('frontend.service.safety');
    }

    public function inno()
    {
        return view('frontend.service.inno');
    }

    public function pro()
    {
        return view('frontend.service.pro');
    }

    public function design()
    {
        return view('frontend.service.design');
    }

    public function support()
    {
        return view('frontend.service.support');
    }

    public function fast()
    {
        return view('frontend.service.fast');
    }


}
