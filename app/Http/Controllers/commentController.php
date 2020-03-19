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

      $tests = \App\Comment::all();


      return view('comments.comments',compact('tests'));
    }

    public function create(){
      return view('comments.create');
    }

    public function store()
    {

      $test = new \App\Comment();
      $new = new \App\Comment();

      $test->name = request('name');
      $test->save();

      $new->comment->request('comment');
      $new->save();

      return redirect() -> back();
    }



}
