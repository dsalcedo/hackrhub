<?php

namespace App\Http\Controllers\Webapp\Eventos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EntradasController extends Controller
{
    public function index()
    {
        return view('app.eventos.entrada.index');
    }
}
