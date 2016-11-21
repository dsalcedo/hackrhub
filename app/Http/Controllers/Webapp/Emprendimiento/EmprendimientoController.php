<?php

namespace App\Http\Controllers\Webapp\Emprendimiento;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EmprendimientoController extends Controller
{
    public function index()
    {
        return view('app.emprendimiento.index');
    }

    public function crear()
    {
        return view('app.emprendimiento.crear');
    }
}
