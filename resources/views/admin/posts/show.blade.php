@extends('layouts.app')

@section('content')
    
<div class="container">
    @if($post_category)
    <h4>Categoria: {{ $post_category->name }}</h4>
    @endif
    
    <h1>{{ ucfirst( $post->title ) }}</h1>

    <div> <strong>Slug:</strong> {{ $post->slug }}</div>

    <p>{{ $post->content }}</p>
</div>

@endsection