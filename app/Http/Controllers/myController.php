<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function AboutPage(){
        return "This is About Controller";
    }
    public function Calc(){
        return 5*6;
    }
   
}