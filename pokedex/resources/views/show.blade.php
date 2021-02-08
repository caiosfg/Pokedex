@extends('layouts.main')

@section('title', 'Pokedex')

@section('content')
    <div class="container">
        <h1>Pokedex</h1>
        <nav aria-label="pagination_show">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="/">Início</a></li>
                <li class="page-item"><a class="page-link" href="/{{$end['id']}}">Próximo</a></li>
            </ul>
        </nav>  
        <ul data-js="pokedex" class="pokedex">
        @foreach($pokemons as $pokemon)
              <li class="card {{ $pokemon['color'] }}">
               <img class="card-image" src="https://pokeres.bastionbot.org/images/pokemon/{{ $pokemon['id'] }}.png" alt="{{ $pokemon['nome'] }}">
                <h2 class="card-title"> {{ $pokemon['nome'] }}</h2>
                <p class="card-subtitle">
                    {{ $pokemon['type'] }}
                </p>
                <a href="/show/{{ $pokemon['id'] }}" class="btn btn-light">Ver Detalhes</a>
              </li>
        @endforeach
        </ul>
    </div>
@endsection
