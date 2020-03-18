@extends('app')


@section('title','comments')
<h3>Comments section</h3>
@section('content')

<ul>

  <form action="#" method="">
    <div class="">
      <input type="text" name="name">
      <button name=""> Add Name </button>
    </div>

  </form>

  <form action="#" method="">
    <div class="">
      <input type="text" name="name">
      <button name=""> Add Comment </button>
    </div>

  </form>
@forelse( $tests as $test )
    <li>{{ $test->name }} {{ $test->comment }}</li>

  @empty
  <li>No comments here</li>
  @endforelse
</ul>

@endsection
