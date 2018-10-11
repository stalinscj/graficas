<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolpedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($empresa)
    {
        return view('solped.index')->with('empresa', $empresa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show($empresa)
    {
        return view('solped.show')->with('solped', $solped);
    }
}
