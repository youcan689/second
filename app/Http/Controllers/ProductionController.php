<?php

namespace App\Http\Controllers;

use App\Production;

class ProductionController extends Controller
{
    public function index()
    {
        $productions = Production::all();
        return view('products', ['productions' => $productions]);
    }
}
