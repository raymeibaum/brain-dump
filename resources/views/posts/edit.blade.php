@extends('layouts.master')

@section('content')
<form method="post" action="{{ route('post.update', ['post' => $post]) }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
  <div class="form-group">
    <label for="post-title">title</label>
    <input name="title"type="text" class="form-control" id="post-title" value="{{ $post->title }}" required autofocus>
  </div>
  <div class="form-group">
    <label for="post-body">body</label>
    <textarea class="form-control"name="body" id="post-body" cols="30" rows="10" required>{{$post->body}}</textarea>
  </div>
  <button type="submit" class="btn btn-default">confirm</button>
</form>
@endsection
