@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h3>{{ $fumetto->title }}</h3>
    <div class="row g-4">
        <div class="col">
            <a href="{{route("home")}}">Torna ai fumetti</a>
        </div>
    </div>

</div>
@endsection