<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Home(){
      return view('index');
    }

    public function About(){
      return view('about');
    }

    public function Food_Menu(){
      return view('food_menu');
    }

    public function Chefs(){
      return view('chefs');
    }

    public function Blog(){
      return view('blog');
    }

    public function SingleBlog(){
      return view('single-blog');
    }

    public function Elements(){
      return view('elements');
    }

    public function Contact(){
      return view('contact');
    }
}
