<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\View\View;

use App\Models\Paquete;

use Illuminate\Support\Facades\DB;

class PaqueteController extends Controller
{
    //
    public function index(): View
    {

        $paquetes = DB::table('paquetes')
            ->join('decoraciones', 'decoraciones.idDecoracion', '=', 'paquetes.idDecoracion')
            ->select('decoraciones.nombreMaterial', 'paquetes.*')
            ->get();

        return View("paquetes", ["renglones" => $paquetes]);
    }
}
