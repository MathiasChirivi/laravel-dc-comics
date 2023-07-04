@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <ul>
                    @foreach ($fumetti as $fumetto)
                    <li>
                        <a href="{{route("fumetti.show", $fumetto->id)}}">{{$fumetto->title}}</a>
                    </li>                    
                    @endforeach
                </ul>
            </div>
            <a href="{{route("fumetti.create")}}">Aggiungi un nuovo fumetto</a>
        </div>
    </div>

</div>
@endsection