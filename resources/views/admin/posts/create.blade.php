@extends('layouts.app')

@section('content')
    
    <div class="container">
        <h1>Crea nuovo Post:</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- form --}}
        <form action="{{route('admin.posts.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
              <label for="title">Titolo:</label>
              <input type="text" class="form-control" id="title" name="title" value='{{ old('title')}}' >
            </div>
            <div class="form-group">
                <label for="content">Contenuto:</label>
                <textarea  class="form-control" id="content" name="content"cols="30" rows="10" value='{{ old('content')}}'></textarea>
            </div>

            <div class="form-group">
                <label for="category_id">Categoria</label>
                <select class="form-control" name="category_id" id="category_id">
                    <option value="">nessuna</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{old('category_id') == $category->id ? 'selected' : ''}}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            
            <div class="form-group">
                <h5>Tags:</h5>
                
                @foreach ($tags as $tag)
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name='tags[]' class="custom-control-input" value="{{$tag->id}}" id="tag-{{$tag->id}}" {{ in_array($tag->id, old('tags',)) ? 'checked' : '' }}>
                    <label class="custom-control-label" for="tag-{{$tag->id}}">{{$tag->name}}</label>
                </div>
                @endforeach
            </div>

            <input type="submit" class="btn btn-success" value="Crea Post"> 
          </form>
        {{-- END FORM --}}
    </div>

@endsection