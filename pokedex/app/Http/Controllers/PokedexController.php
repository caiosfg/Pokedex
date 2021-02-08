<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokedexController extends Controller
{
    public function show(){

        $pokemons = array();

        for ($i = 1; $i <= 5; $i++) {
            $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$i}");

            if(isset($response)){
                array_push($pokemons, $response['name']);
            }

        //    dd($response->json()); 
        }

        // dd($response->json());
        // echo $response['name'];

        return view('show',['pokemons' => $pokemons]);

    }
    public function getId($id){
        $response = Http::get('https://pokeapi.co/api/v2/pokemon/{{$id}}');

        dd($response->json());

    }
}
