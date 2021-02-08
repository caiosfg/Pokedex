@extends('layouts.main')

@section('title', 'Pokedex')

@section('content')
    <div class="container">
        <h1>Pokedex</h1>
        <ul data-js="pokedex" class="pokedex">
            @foreach($pokemons as $pokemon)
              <li class="card">
                <h2 class="card-title">{{$pokemon}}</h2>
                <p class="card-subtitle">{{$pokemon}}</p>
              </li>
            @endforeach
        </ul>
    </div>
@endsection
