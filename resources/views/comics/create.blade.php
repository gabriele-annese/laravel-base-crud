@extends('layouts.main')

@section('main-content')
<h1 class="mt-3 mb-4">Create new Comic</h1>
<div class="container">
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
             <textarea class="form-control" name="description" id="description" rows="6"></textarea>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <select name="type" id="type" class="form-label">
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">thumb</label>
             <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">
                Create new Comic
            </button>
        </div>
    </form>
</div>
@endsection