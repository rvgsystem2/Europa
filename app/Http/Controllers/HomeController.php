<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function about(){
        return view('frontend.about');
    }

    public function class_1(){
        return view('frontend.class_1');
    }

    public function euro_igko(){
        return view('frontend.euro_igko');
    }

    public function iao_exam(){
        return view('frontend.iao_exam');
    }

    public function iso_exam(){
        return view('frontend.iso_exam');
    }

    public function imo_exam(){
        return view('frontend.imo_exam');
    }

    public function iso_1(){
        return view('frontend.iso_1');
    }

    public function iso_2(){
        return view('frontend.iso_2');
    }

    public function iso_3(){
        return view('frontend.iso_3');
    }

    public function iso_4(){
        return view('frontend.iso_4');
    }

    public function iso_5(){
        return view('frontend.iso_5');
    }

    public function iso_6(){
        return view('frontend.iso_6');
    }

    public function iso_7(){
        return view('frontend.iso_7');
    }

    public function iso_8(){
        return view('frontend.iso_8');
    }

    public function imo_1(){
        return view('frontend.imo_1');
    }
}
