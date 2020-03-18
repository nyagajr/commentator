<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    public function index(){
      return view('app');
    }


    public function comment(){

      $tests = \App\Comment::all();

      
      return view('comments.comments',compact('tests'));
    }


}
