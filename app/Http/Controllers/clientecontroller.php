<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientecontroller extends Controller
{
    public function index(){
        return view("welcome");
    }

    public function cliente(){
        redirect("/views/cliente") ;
    }
}
