@extends('layouts.app')

@section('content')
<div class="container my-3 ">
    <h3 class="mb-4">{{ $fumetto->title }}</h3>
    <div class="row g-4">
        <div class="col">
            <div class="d-flex">
                    <img src="{{ $fumetto->thumb }}" alt="" style="width: 25%;">
                <div class="d-flex flex-column ms-5">
                    <div  class="mb-3"><strong>Prezzo:</strong> {{ $fumetto->price }} </div>
                    <div class=""><strong>Descrizione:</strong> {{ $fumetto->description }}</div>
                    <div><strong>Serie:</strong> {{ $fumetto->series }}</div>
                </div>
            </div>
        </div>
        <a href="{{route("home")}}">Torna ai fumetti</a>
    </div>

</div>
@endsection