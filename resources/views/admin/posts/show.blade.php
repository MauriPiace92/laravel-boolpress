@extends('layouts.app')

@section('content')
    
<div class="container">
    @if($post_category)
    <h4>Categoria: {{ $post_category->name }}</h4>
    @endif
    
    <h1>{{ ucfirst( $post->title ) }}</h1>

    @if($post->cover)
        
            <img src="{{ asset('storage/' . $post->cover) }}" alt='{{$post->title}}'>
        
    @endif

    <div> <strong>Slug:</strong> {{ $post->slug }}</div>

    <p>{{ $post->content }}</p>

    <div class="mt-2 mb-2">
        <strong>Tags :</strong>

        @foreach ($post_tags as $tag)
            {{$tag->name}} {{$loop->last ? '' : ', '}}
            
        @endforeach

    </div>
</div>

@endsection