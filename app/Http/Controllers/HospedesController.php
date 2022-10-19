<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospedesController extends Controller
{
    public function create(){
        return view('hospedes.cadastrar');
    }
    
    public function store(Request $request)
    {

    }
}
