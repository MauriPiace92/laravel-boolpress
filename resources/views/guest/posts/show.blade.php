@extends('layouts.app')

@section('content')
    
    <div class="container">
        <section class="blog-post">
            @if($post_category)
            <h4>Categoria: {{ $post_category->name }}</h4>
            @endif
            <h1 class="post-title">{{ ucfirst($post->title) }}</h1>
            <p>{{ $post->content }}</p>
        </section>
        

    </div>

@endsection