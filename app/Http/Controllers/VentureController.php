<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentureController extends Controller
{
    public function index() {
        return view('ourVenture');
    }

    public function aboutUs() {
        return view('about');
    }

    public function contactUs() {
        return view('contact');
    }

    public function successStory() {
        return view('successStory');
    }
}
