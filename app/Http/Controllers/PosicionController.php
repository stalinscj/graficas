<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosicionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa, $solped)
    {
        return view('posicion.index')->with([
        	'empresa' => $empresa,
        	'solped' => $solped
        ]);
    }
}
