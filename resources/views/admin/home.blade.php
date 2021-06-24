@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <h1>home loggati</h1>
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        
                        <h3>Benvenuto {{$current_user->name}}</h3>

                        @if($current_user_info)
                        <ul>
                            <li>Il tuo indirizzo: {{ $current_user_info->full_address }}</li>
                            <li>Numero di telefono: {{$current_user_info->telephone}} </li>

                        </ul>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
