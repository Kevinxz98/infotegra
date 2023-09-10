<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\personajes;

class PersonajesController extends Controller
{
    //
    public function index()
    {
        $usuarios = HTTP::get('https://rickandmortyapi.com/api/character')['results'];
        $cantidad = count($usuarios);


        return view('personajes.index', compact('usuarios','cantidad'));
    }

    public function detalle($id){

        $id = (int)$id;

        $characterDetails = null;

        $usuarios = HTTP::get('https://rickandmortyapi.com/api/character')['results'];

        foreach ($usuarios as $character) {
            if ($character['id'] === $id) {
                $characterDetails = $character;
                break; 
            }
        }

        return view('personajes.detalle', compact('characterDetails'));

    }

    public function persolc(){


        $personajes = personajes::paginate(20);

        $usuarios = HTTP::get('https://rickandmortyapi.com/api/character')['results'];
        $cantidad = count($usuarios);


        return view('personajes.persolc', compact('personajes','cantidad'));
    }

    public function subir(){

        $characters = HTTP::get('https://rickandmortyapi.com/api/character')['results'];

        personajes::query()->delete();

        foreach ($characters as $character) {
            personajes::create([
                'name' => $character['name'],
                'status' => $character['status'],
                'species' => $character['species'],
                'type' => $character['type'],
                'gender' => $character['gender'],
                'origin_name' => $character['origin']['name'],
                'origin_url' => $character['origin']['url'],
                'image' => $character['image'],
            ]);
        }

        return redirect()->back();


    }

    public function showperso($id){

        $personaje = personajes::find($id);

        return view('personajes.detallelc', compact('personaje'));
    }

    public function update($id){

        $datos = request()->except(['_token','_method']);
        personajes::where('id','=',$id)->update($datos);
        return redirect()->back();
    }



}
