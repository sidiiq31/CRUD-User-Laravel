<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HelloWorldController extends Controller
// {
//     //
//     public function index() {
//         return "Selamat Belajar Laravel";
//     }

//     publc function ambilFile() {
//         return view('ambilFile');
//     }
// }

class HelloWorldController extends Controller
{
    //
    public function index() {
        return "Selamat Belajar Laravel";
    }

    public function getlorem() {
        return view('v_html.getlorem');
    }
}