@extends('layouts.main')

@section('main-content')
    <div class="container mt-5">
        <h1>{{ $comic->title }}</h1>
        <div class="row">
            <div class="info-ctn mt-3 col-md-6">
                <p>
                    Description:
                    {{$comic->description}}
                </p>
                <p>
                    Price: 
                    <strong>
                        {{$comic->price}} $ 
                    </strong>
                </p>
                <p class="info-comic">
                    <span>
                        Series: 
                        <strong>
                            {{$comic->series}}
                        </strong>
                    </span>
                    <span>
                        Date:
                        <strong>
                             {{$comic->sale_date}}
                        </strong>
                    </span>
                </p>
            </div>
            <div class="img-ctn col-md-6">
                <img src="{{ $comic->thumb}}" alt="">
            </div>

            <a href="{{route('comics.index')}}">Return Back</a>
        </div>
    </div>
@endsection