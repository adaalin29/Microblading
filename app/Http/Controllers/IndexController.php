<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    
    
    public function index()
    {
      return view('index');
    }
    public function phibrows()
    {
      return view('phibrows');
    }
    public function testimonials()
    {
      return view('testimonials');
    }
    public function contact()
    {
      return view('contact');
    }
    public function gallery()
    {
      return view('gallery');
    }
    public function classes()
    {
      return view('classes');
    }
    public function terms()
    {
      return view('terms');
    }
    public function ClassesAdd()
    {
      return view('classes-add');
    }
    public function ClassDetail()
    {
      return view('class-detail');
    }
    public function Francek()
    {
      return view('francek');
    }
    
    
}