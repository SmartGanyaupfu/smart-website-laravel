<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function Index(){
        return view('about');
    }

    public function ContactUs(){
        return view('contact');
    }
}
