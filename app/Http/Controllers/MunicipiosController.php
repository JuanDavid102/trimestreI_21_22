<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use Illuminate\Http\Request;

class MunicipiosController extends Controller
{
    public function getIndex()
    {
        $municipios = Municipio::all();

        return view('municipios', array(
            'municipios' => $municipios
        ));
    }

    public function getEdit($municipio_id)
    {
        $municipio = Municipio::findOrFail($municipio_id);
        return view('editMunicipio', array(
            'municipio' => $municipio
        ));
    }

    public function putEdit(Request $request)
    {
        $nombre = $request->input('nombre');
        $poblacion = $request->input('poblacion');
        $municipio_id = $request->input('municipio_id');

        $m = Municipio::findOrFail($municipio_id);
        $m->nombre = $nombre;
        $m->poblacion = $poblacion;
        $m->save();

        $municipios = Municipio::all();
        return view('municipios', array(
            'municipios' => $municipios
        ));
    }
}
