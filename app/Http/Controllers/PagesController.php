<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $jobs = 'Dev';
        return view('pages.index')->with('jobs',$jobs);
    }
    public function about(){
        $jobs = 'Dev';
        return view('pages.about')->with('jobs',$jobs);
    }
    public function prolanguage(){
        $mylang = array('c'=>'c#','p'=>'PHP','J'=>'Java');
        return view('pages.prolanguage')->with('mylang',$mylang);
    }
}
