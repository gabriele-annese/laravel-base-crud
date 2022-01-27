@extends('layouts.main')

@section('main-content')
    <div class="container mt-5">
        <h1 class="text-center">Our Comics</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Type</th>
                     <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{$comic->id}}</td>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->type}}</td>
                        <td>
                            <a  class="btn btn-success" href="{{route('comics.show', $comic->id)}}">SHOW</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{route('comics.edit', $comic->id)}}">EDIT</a>
                        </td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection