<?php

namespace App\Http\Controllers\Webapp\Eventos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventosController extends Controller
{
    public function index()
    {
        return view('app.eventos.index');
    }

    public function evento()
    {
        return view('app.eventos.evento.index');
    }
}
