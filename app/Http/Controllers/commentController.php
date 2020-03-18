<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    public function index(){
      return view('app');
    }


    public function comment(){
      return view('comments.comments');
    }


}
