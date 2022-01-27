@extends('layouts.main')

@section('main-content')
<div class="container">
    <h1 class="mt-3 mb-4">Edit: {{$comic->title}} </h1>
    
    <form action="{{route('comics.update', $comic->id)}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">description</label>
             <textarea class="form-control" name="description" id="description" rows="6">{{$comic->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <select name="type" id="type" class="form-control">
                <option value="comic book" @if ($comic->type == 'comic book') selected @endif>comic book</option>
                <option value="graphic novel" @if ($comic->type == 'graphic novel') selected @endif> graphic novel</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
             <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
             <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" >
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
             <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}" >
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">series</label>
             <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-primary">
                UPDATE COMIC
            </button>
        </div>
        
    </form>
</div>
@endsection