<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class commentController extends Controller
{
    public function index()
    {
      return view('app');
    }


    public function comment()
    {

      $tests = [
        'name for test', 'name 2 for test', 'name 3 for test'
      ];


      return view('comments.comments',compact('tests'));
    }

    // public function store()
    // {
    //
    //   $test = new \App\Comment();
    //
    //
    //   $test->name = request('name');
    //   $test->save();
    //
    //
    //   return redirect() -> back();
    // }



}
