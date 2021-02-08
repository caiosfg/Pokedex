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
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/{{$id}}');

        dd($response->json());

    }
}
