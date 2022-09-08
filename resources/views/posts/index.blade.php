@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        {{ Auth::user()->name }}
        <h1>Blog Name</h1>
        <p class="create">[<a href="/posts/create">create</a>]</p>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                       <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <small>{{ $post->user->name }}</small>
                    <p class='body'>{{ $post->body }}</p>
                    <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
    </body>
</html>

@endsection