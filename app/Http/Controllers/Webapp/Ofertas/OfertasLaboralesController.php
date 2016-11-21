<?php

namespace App\Http\Controllers\Webapp\Ofertas;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OfertasLaboralesController extends Controller
{
    public function index()
    {
        return view('app.ofertasLaborales.index');
    }
}
