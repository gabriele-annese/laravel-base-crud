@extends('layouts.main')

@section('main-content')
    <div class="container mt-5">
        <h1 class="text-center">Our Comics</h1>
        @if (session('deleted'))
            <div class="alert alert-success">
                <strong>{{session('deleted')}}</strong>
                successfully deleted.
            </div>
        @endif
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
                        <td>
                            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <input type="submit" class="btn btn-danger" value="DELETE"
                                onclick="return confirm('Are you sure you delete this comic ?')">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection