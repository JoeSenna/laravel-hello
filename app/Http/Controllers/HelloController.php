<?php

namespace App\Http\Controllers;//nome quando for importar essa classe em outro lugar

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view ('hello');
    }
}
