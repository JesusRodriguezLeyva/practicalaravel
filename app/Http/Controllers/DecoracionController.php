<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use App\Models\Decoracione;

class DecoracionController extends Controller
{
    //
    public function index(): View
    {
        return view("decoraciones", ["renglones" => Decoracione::all()]);
    }
}
