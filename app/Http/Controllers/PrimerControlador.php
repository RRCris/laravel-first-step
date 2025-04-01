<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    public function index()
    {
        return view("contact1", ["name" => "Luis"]);
    }
}
