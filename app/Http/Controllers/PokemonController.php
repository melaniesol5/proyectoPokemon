<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;;
use GuzzleHttp\Promise;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
    	$url='https://pokeapi.co/api/v2/';
        $param = $request->param; //parametro de la busqueda
        $params='pokemon?offset=0&limit=40';
        $resultados=$this->searchAPI($url,$params)->results;
        $resultadosFiltrados=collect([]); 
        foreach ($resultados as $key=>$result) {  
            if(stristr($result->name, $param)){
               $resultadosFiltrados->push($result->url); 
            }
        }
        $listOfPokemons=collect([]);
        foreach ($resultadosFiltrados as $url) {
        $pokemonEncontrado=$this->searchAPI($url);
        $listOfPokemons->push([
        	'nombre'=>$pokemonEncontrado->name,
        	'imagen_front'=>$pokemonEncontrado->sprites->front_default,
        	'imagen_back'=>$pokemonEncontrado->sprites->back_default,
        	'tipo'=>$pokemonEncontrado->types]);
        }
        return view('pokemonfinder', compact('listOfPokemons', 'param'));    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchAPI($url,$params=null){
        //creo nuevo cliente para las peticiones
        $client = new Client(['base_uri' => $url]);
        $res = $client->request('GET',$params);
        $cont=(string) $res->getBody()->getContents();
        $pokemon=json_decode($cont);

    return $pokemon; //Resource for pokemon
      
    }
}
