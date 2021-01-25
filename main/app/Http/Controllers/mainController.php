<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
  public function home(){
    $placeholder = 'home';
    return view('pages.home',compact('placeholder'));
  }
  public function blog(){
    $placeholder = 'blog';
    return view('pages.blog' , compact('placeholder'));
  }
  public function about(){
    $placeholder = 'about';
    return view('pages.about' , compact('placeholder'));
  }
}
