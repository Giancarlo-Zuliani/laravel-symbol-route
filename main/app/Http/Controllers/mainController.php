<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
  public function home(){
    return view('pages.home');
  }
  public function blog(){
    return view('pages.blog');
  }
  public function about(){
    return view('pages.about');
  }
}
