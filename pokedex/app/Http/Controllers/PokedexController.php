<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokedexController extends Controller
{
    public function show(){

        $pokemons = array();

        for ($i = 1; $i <= 15; $i++) {
            $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$i}");

            if(isset($response)){
                $poke = [];
                $type = [];

                $poke['id'] = $response['id'];
                $poke['nome'] = $response['name'];

                foreach($response['types'] as $key => $row){

                  $poke['color'] = $row['type']['name'];
                  array_push($type,  $row['type']['name']);
                }

                $poke['type'] = implode(" ", $type);

                array_push($pokemons, $poke);
            }
        }

        return view('show',['pokemons' => $pokemons]);

    }
    public function getId($id){

        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}");

        $pokemons = array();

            if(isset($response)){
                $poke = [];
                $type = [];
                $moves = [];

                $poke['id'] = $response['id'];
                $poke['nome'] = $response['name'];
                $poke['height'] = $response['height'];
                $poke['weight'] = $response['weight'];

                foreach($response['types'] as $key => $row){
                  $poke['color'] = $row['type']['name'];
                  array_push($type,  $row['type']['name']);
                }

                foreach($response['moves'] as $key => $row){
                  array_push($moves,  $row['move']['name']);
                }

                $poke['type'] = implode(" ", $type);
                $poke['moves'] = implode(", ", $moves);

                array_push($pokemons, $poke);
            }
        

        return view('choose',['pokemons' => $pokemons]);

    }
}
