@extends('layouts.main')

@section('title', 'Pokedex')

@section('content')
    <div class="container">
        <h1>Pokedex</h1>
        <ul data-js="pokedex" class="pokedex">
        @foreach($pokemons as $pokemon)
              <li class="card {{ $pokemon['color'] }}">
               <img class="card-image" src="https://pokeres.bastionbot.org/images/pokemon/{{ $pokemon['id'] }}.png" alt="{{ $pokemon['nome'] }}">
                <h2 class="card-title"> {{ $pokemon['nome'] }}</h2>
                <p class="card-subtitle">
                    {{ $pokemon['type'] }}
                </p>
              </li>
        @endforeach
        </ul>
    </div>
@endsection
