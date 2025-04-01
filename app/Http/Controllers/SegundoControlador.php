<?php


namespace App\Http\Controllers;

class SegundoControlador extends Controller
{
    public function index()
    {
        return view("contact2", ["name" => "Luis"]);
    }
}
