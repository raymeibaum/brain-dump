@extends('layouts.master')

@section('content')
<form method="post" action="/posts">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="post-title">Title</label>
    <input name="title"type="text" class="form-control" id="post-title" required>
  </div>
  <div class="form-group">
    <label for="post-body">Body</label>
    <textarea class="form-control"name="body" id="post-body" cols="30" rows="10" required></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
@endsection
