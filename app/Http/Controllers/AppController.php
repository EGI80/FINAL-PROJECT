<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use App\Models\Services;
use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    public function index()
    {
        return view('welcome', [
            'heros' => Hero::orderBy('id', 'desc')->get(),
            'abouts' => About::orderBy('id', 'desc')->get(),
            'services' => Services::orderBy('id', 'desc')->get(),
        ]);
    }
}
