@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create comics</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row g-4">
        <div class="col">
            <form action="{{ route('fumetti.store') }}" class="needs-validation" method="post">
                @csrf
            
                <label for="name">title </label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" value="{{ old("title") }}" name="title">
                @error("title") 
                    <div class="invalid-feedback">Error: {{$message}}</div>
                @enderror

                <label for="name">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" value="{{ old("description") }}" type="text" name="description" cols="30" rows="4"></textarea>
                @error("description") 
                    <div class="invalid-feedback">Error: {{$message}}</div>
                @enderror

                <label for="name">type</label>
                <select class="form-control @error('type') is-invalid @enderror" name="type">
                    <option value="" @selected(!old("type")) selected disabled >Seleziona un opzione</option>
                    <option value="comic book" @selected(old("type")=="Comic Book")>Comic book</option>
                    <option value="graphic novel" @selected(old("type")=="graphic novel")>graphic novel</option>
                </select>
                @error("type") 
                    <div class="invalid-feedback">Error: {{$message}}</div>
                @enderror

                <label for="name">thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb">
                @error("thumb") 
                    <div class="invalid-feedback">Error: {{$message}}</div>
                @enderror

                <label for="name">Price</label>
                <input class="form-control @error('Price') is-invalid @enderror" type="text" name="Price">
                @error("Price") 
                    <div class="invalid-feedback">Error: {{$message}}</div>
                @enderror

                <label for="name">sale_date</label>
                <input class="form-control @error('sale_date') is-invalid @enderror" type="text" name="sale_date">
                @error("sale_date") 
                    <div class="invalid-feedback">Error: {{$message}}</div>
                @enderror

                <label for="name">Series</label>
                <input class="form-control @error('Series') is-invalid @enderror" type="text" name="Series">
                @error("Series") 
                    <div class="invalid-feedback">Error: {{$message}}</div>
                @enderror

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection