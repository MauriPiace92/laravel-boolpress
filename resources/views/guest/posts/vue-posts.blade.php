@extends('layouts.app')

@section('header-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection

@section('footer-scripts')
    <script src="{{asset('js/post.js')}}" ></script>
@endsection

@section('content')
    <div class="container">
        <div id="root">
            <h1>@{{title}}</h1>
            <div class="row">
                <div v-for='post in posts' class="col-6">
                    <div  class="card" style="width: 18rem;">
                        <div class="card-body">
                        
                        <h5 class="card-title">@{{post.title}}</h5>
                        <p class="card-text">@{{ post.Content }}</p>
                        <a href="#" class="btn btn-primary">Vai al Post</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection