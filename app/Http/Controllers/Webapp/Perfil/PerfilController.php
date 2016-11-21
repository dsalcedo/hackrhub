<?php

namespace App\Http\Controllers\Webapp\Perfil;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PerfilController extends Controller
{
    public function index()
    {
        return view('app.perfil.index');
    }
}
