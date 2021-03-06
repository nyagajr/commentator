@extends('app')
<div class="" style="background:#F1F0EA">

  <h1 style="text-align:center">COMMENTATOR</h1>

<form action="/" method="post"  style="text-align:center;padding-top: 70px; ">
  <h4>Add a comment here</h4>

  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" autocomplete = 'off' value="{{ old('comment') }}" placeholder="name" >
      @error('name') <p style="color:red;">{{ $message }}</p> @enderror
  </div>

<div class="form-group">
  <label for="comment">Comment</label>
  <input type="text" class="form-control" name="comment" autocomplete = 'off' value="{{ old('comment') }}" placeholder="comment">
    @error('comment') <p style="color:red;">{{ $message }}</p> @enderror
</div>

  @csrf

  <button class="btn btn-primary"> Submit </button>

</form>


<div class="" style="padding-left:60px">
  @forelse($authors as $author)

  <div class="card w-50" style="">
    <h5 class="card-header">Name: {{ $author->name }}</h5>
    <div class="card-body">
      <h5 class="card-title">comment</h5>
      <p class="card-text">'{{ $author->comment }}'</p>
    </div>
  </div>

<br>
  @empty
    <li>Nothing to display</li>
  @endforelse
</div>
</div>
