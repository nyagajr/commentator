<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{

  public function index()
  {
    return view('app');
  }


  public function comment()
  {

  
    return view('comments.names',compact('comments'));
  }

  // public function store()
  // {
  //
  //
  //   return redirect() -> back();
  // }
}
