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

    $comments = [
      'name for comment', 'name 2 for comment', 'name 3 for comment'
    ];


    return view('comments.names',compact('comments'));
  }

  public function store()
  {


    return redirect() -> back();
  }
}
