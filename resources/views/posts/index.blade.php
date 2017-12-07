@extends('layouts.master')

@section('content')
<ul class="list-unstyled">
    @foreach ($posts as $post)
        <li><a href="{{ route('post.show', ['post' => $post]) }}">{{ $post->title }}</a></li>
    @endforeach
</ul>
<a href="{{ route('post.create') }}" class="btn btn-default">new</a>
@endsection
