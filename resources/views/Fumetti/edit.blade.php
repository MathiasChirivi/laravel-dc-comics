@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Cambia il parametro che desideri</h1>
    <div class="row g-4">
        <div class="col">
            <form action="{{ route('fumetti.update', $fumetto->id ) }}" method="post">
                @csrf

                @method("PUT")
            
                <label for="name">title</label>
                <input class="form-control" type="text" name="title" value="{{ $fumetto->title }}">

                <label for="name">description</label>
                <textarea class="form-control" type="text" name="description" cols="30" rows="4">{{ $fumetto->description }}</textarea>

                <label for="name">type</label>
                <select class="form-control" name="type">
                    <option value="comic book" @selected($fumetto->type=="comic book")>Comic book</option>
                    <option value="graphic novel" @selected($fumetto->type=="graphic novel")>graphic novel</option>
                </select>

                <label for="name">thumb</label>
                <input class="form-control" type="text" name="thumb" value="{{ $fumetto->thumb }}">

                <label for="name">Price</label>
                <input class="form-control" type="text" name="Price" value="{{ $fumetto->price }}">

                <label for="name">sale_date</label>
                <input class="form-control" type="text" name="sale_date" value="{{ $fumetto->sale_date }}">

                <label for="name">Series</label>
                <input class="form-control" type="text" name="Series" value="{{ $fumetto->series }}">

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection