<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\About;
class AboutController extends Controller
{
   public function  index(){
       $about=About::all();
       return view ('user.about',compact('about'));
   }
}
