<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.landing');
    }
}
