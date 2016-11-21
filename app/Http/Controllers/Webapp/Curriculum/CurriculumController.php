<?php

namespace App\Http\Controllers\Webapp\Curriculum;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CurriculumController extends Controller
{
    public function index()
    {
        return view('app.curriculum.index');
    }
}
