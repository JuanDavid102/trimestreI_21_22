<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidad;

class localidadesController extends Controller
{
    public function index($id)
    {
        $localidades = Localidad::where('municipio_id', $id)->get();
        return view('localidadesController', array('localidades' => $localidades));
    }
}
