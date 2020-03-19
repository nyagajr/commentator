@extends('app')


@section('title','comments')
<div class="" style="text-align:center;padding-top: 70px; text-align: center;">
<h3 ><b>COMMENT HERE</b></h3>
@section('content')

<ul>

  <form action="/" method="post" autocomplete="off">



      <b>Name: </b> <input type="text" name="name" >
      @csrf

      <b>Comment: </b><input type="text" name="comment">
      @csrf


      <button > Submit </button>


  </form>
</div>

<hr>


<h3 ><b>YOUR COMMENT IS HERE</b></h3>
@forelse( $tests as $test )

    <li><b>Name:</b>{{ $test->name }}</li>
    <b>Comment:</b>{{ $test->comment }}

  @empty
  <li>No comments here</li>
  @endforelse
</ul>

@endsection
