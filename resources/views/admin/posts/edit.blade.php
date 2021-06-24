@extends('layouts.app')

@section('content')
    
    <div class="container form_container">
        <h2>Modifica il Post</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.posts.update', [ 'post' => $post->id]) }}" method="post">
            @csrf

            @method('PUT')

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}">
            </div>

            <div class="form-group">
                <label for="content">Descrizione</label>
                <textarea name="content" class="form-control" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">nessuna</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <h5>Tags:</h5>

                @foreach ($tags as $tag)
                    <div class="custom-control custom-checkbox">
                        @if ($errors->any())
                            <input type="checkbox" name='tags[]' class="custom-control-input" value="{{$tag->id}}" id="tag-{{$tag->id}}" {{ in_array($tag->id, old('tags',)) ? 'checked' : '' }}>        
                        @else
                            <input type="checkbox" name='tags[]' class="custom-control-input" value="{{$tag->id}}" id="tag-{{$tag->id}}" {{ $post->tags->contains($tag->id) ? 'checked' : '' }}>   
                        @endif                    
                    
                        <label class="custom-control-label" for="tag-{{$tag->id}}">{{$tag->name}}</label>
                    </div>
                @endforeach
            </div>

            <input type="submit" class="btn btn-primary" value="Salva">
        </form>
    </div>

@endsection