@extends('layouts.master')

@section('content')
<ul class="list-unstyled">
@foreach ($posts as $post)
    <li><a href="{{ route('posts.show', ['post' => $post]) }}">{{ $post->title }}</a></li>
@endforeach
</ul>

@endsection
