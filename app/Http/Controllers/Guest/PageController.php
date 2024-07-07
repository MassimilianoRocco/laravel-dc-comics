<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = config("data");
        return view('home', $data);
    }

    public function about() {
        return view('about');
    }

    // public function form() {
    //     return view('form');
    // }
}
