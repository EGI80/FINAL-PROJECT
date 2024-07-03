<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Hero;
use App\Models\project;
use App\Models\Services;
use App\Models\team;
use App\Models\teams;
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
            'projects' => project::orderBy('id', 'desc')->get(),
            'teams' => team::orderBy('id', 'desc')->get(),

        ]);
    }
}
