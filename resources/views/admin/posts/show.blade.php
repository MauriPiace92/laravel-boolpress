@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h1>{{$post->title}}</h1>

        <p class="mt-2 mb-2"><strong>Slug:</strong> {{$post->slug}}</p>

        <p>{{$post->content}}</p>

        <a href="{{route('admin.posts.edit', ['post'=> $post->id])}}" class="btn btn-success">Modifica Post</a>

    </div>

@endsection