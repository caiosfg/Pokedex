@extends('layouts.main')

@section('title', 'Pokedex')

@section('content')
    <div class="container">
        @foreach($pokemons as $pokemon)
        <h1>Eu escolho ...</h1>
               <img class="card-image-choose" src="https://pokeres.bastionbot.org/images/pokemon/{{ $pokemon['id'] }}.png" alt="{{ $pokemon['nome'] }}">
                <h2 class="card-title"> {{ $pokemon['nome'] }}</h2>
                <p class="card-subtitle">
                    {{ $pokemon['type'] }}
                </p>
                <p class="card-subtitle"><ion-icon name="accessibility-outline"></ion-icon> Height : 
                    {{ $pokemon['height'] }}
                </p>
                <p class="card-subtitle"><ion-icon name="barbell-outline"></ion-icon> Weight :
                    {{ $pokemon['weight'] }}
                </p>
                <p class="card-subtitle"><ion-icon name="game-controller-outline"></ion-icon> Moves : 
                    {{ $pokemon['moves'] }}
                </p>
                <a href="/" id="btn-voltar" class="btn btn-light">Voltar</a>
              </li>
        @endforeach
    </div>
@endsection
