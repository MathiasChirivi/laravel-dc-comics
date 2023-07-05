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
    </div>
    <div class="d-flex justify-content-between mt-5">
        <div class="d-flex">
            <a class="btn btn-primary  me-3" href="{{route("home")}}">Torna ai fumetti</a>
            <a class="btn btn-primary " href="{{ route("fumetti.edit", $fumetto) }}">Modifica questo prodotto</a>
        </div>
        <div>
            <form id="deleteForm" action="{{ route('fumetti.destroy', $fumetto) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Cancella il fumetto">
            </form>
        </div>
    </div>
    </div>
</div>
@endsection