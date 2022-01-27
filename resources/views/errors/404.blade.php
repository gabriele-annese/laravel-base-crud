@extends('layouts.main')

@section('main-content')
        <div class="container text-center mt-5">
            <h1>404</h1>

            <h3 class="mb-5 mt-3">Ooops…… something went wrong</h3>
            <div class="container-routes">
                <a class="btn btn-info" href="{{route('home')}}">Back to Home</a>
                <a class="btn btn-warning" href="{{route('comics.index')}}">Back to Archives</a>
            </div>
        </div>
@endsection