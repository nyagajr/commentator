<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){


      $authors = \App\Author::all();


      return view('author.create',compact('authors'));
    }

    public function create(){

      return view('author.create');
    }

    public function store(){

      $data = request()->validate([
        'name' => 'required',
        'comment'=>'required'
      ]);

      \App\Author::create($data);

      return redirect('/');
    }
}
