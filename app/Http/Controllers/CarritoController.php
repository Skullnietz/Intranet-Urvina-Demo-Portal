<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index(){
        return view('carrito');
    }
    public function postcompra(){
        return view('pedidosRecientes');
    }
}
