<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

 public function new(){
     return view('new');
    //    echo "this is test data";
    }
}
