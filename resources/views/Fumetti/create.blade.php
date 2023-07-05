@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Create comics</h1>
    <div class="row g-4">
        <div class="col">
            <form action="{{ route('fumetti.store') }}" method="post">
                @csrf
            
                <label for="name">title</label>
                <input class="form-control" type="text" name="title">

                <label for="name">description</label>
                <textarea class="form-control" type="text" name="description" cols="30" rows="4"></textarea>

                <label for="name">type</label>
                <select class="form-control" name="type">
                    <option value="comic book">Comic book</option>
                    <option value="graphic novel">graphic novel</option>
                </select>

                <label for="name">thumb</label>
                <input class="form-control" type="text" name="thumb">

                <label for="name">Price</label>
                <input class="form-control" type="text" name="Price">

                <label for="name">sale_date</label>
                <input class="form-control" type="text" name="sale_date">

                <label for="name">Series</label>
                <input class="form-control" type="text" name="Series">

                <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
             </form>
        </div>
    </div>

</div>
@endsection