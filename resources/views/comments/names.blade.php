@extends('app')


@section('title','names')
<div class="" style="text-align:center;padding-top: 70px;">
<h3 ><b>COMMENT HERE</b></h3>
@section('content')


<h3 ><b>YOUR COMMENT IS HERE</b></h3>
@forelse( $comments as $comment )

    <li><b>Name:</b>{{ $comment }}</li>


  @empty
  <li>No names here</li>
  @endforelse
</ul>

@endsection
