<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropietarioResource;
use App\Models\Propietario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class PropietarioController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Propietario::class, 'propietario');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PropietarioResource::collection(Propietario::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $idNueva = DB::table('propietarios')->orderByDesc('id')->limit(1)->get('id');
        $idNueva = $idNueva[0]->id+1;
        $response = Http::get('https://my.api.mockaroo.com/owners/'. $idNueva . '.json', [
            'key' => '65658a10',
        ]);

        $propietario = json_decode($response, true);

        $p = new Propietario;
        $p->dni = $propietario['dni'];
        $p->apellidos = $propietario['last_name'];
        $p->nombre = $propietario['first_name'];
        $p->save();


        return new PropietarioResource($p);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function show(Propietario $propietario)
    {
        return new PropietarioResource($propietario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propietario $propietario)
    {
        $propietarioData = json_decode($request->getContent(), true);
        $propietario->update($propietarioData);

        return new PropietarioResource($propietario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propietario  $propietario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propietario $propietario)
    {
        $propietario->delete();
    }
}
