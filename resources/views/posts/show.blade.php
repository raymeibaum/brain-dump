@extends('layouts.master')

@section('content')
<h3>{{ $post->title }}</h3>
<p>{{ $post->body }}</p>
<hr>
<form method="post" action="{{ route('post.delete', ['post' => $post]) }}" onSubmit="return confirm('Are you sure you wish to delete {{ $post->title }}?');">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <a href="{{ route('post.edit', ['post' => $post]) }}" class="btn btn-default">edit</a>
    <button type="submit" class="btn btn-danger">delete</button>
</form>
@endsection
