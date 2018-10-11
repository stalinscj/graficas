<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficaController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	return view('grafica.index');
    }
}
