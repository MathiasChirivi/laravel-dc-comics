@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div >
                <ul class="d-flex flex-wrap gap-4">
                    @foreach ($fumetti as $fumetto)
                    <li class="list-unstyled">
                        <div class="card cardBg" style="height: 32rem; width: 18rem;">
                            <img class="h-75" src="{{$fumetto->thumb}}" alt="">
                        <div class="card-body">
                            <a class="d-flex justify-content-center text-white text-decoration-none" href="{{route("fumetti.show", $fumetto->id)}}">{{$fumetto->title}}</a>
                        </div>
                        </div>
                    </li>                    
                    @endforeach
                </ul>
            </div>
            <a href="{{route("fumetti.create")}}">Aggiungi un nuovo fumetto</a>
        </div>
    </div>

</div>
@endsection