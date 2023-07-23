<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function home()
    {
        return view('front.home.home');
    }
    public function courseDetails()
    {
     return view('front.course.details');
    }
}
