<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index(){
        return view('catalogo');
    }
    public function indexCategoria(){
        return view('categoria');
    }
    public function showItem(){
        return view('item');
    }
}
