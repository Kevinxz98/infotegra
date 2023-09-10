<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarios = HTTP::get('https://rickandmortyapi.com/api/character')['results'];

        $cantidad = count($usuarios);

        return view('home', compact('usuarios','cantidad'));
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

        return view('detalles', compact('characterDetails'));

    }
}
