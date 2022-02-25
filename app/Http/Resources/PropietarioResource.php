<?php

namespace App\Http\Resources;

use App\Models\Construccion;
use Illuminate\Http\Resources\Json\JsonResource;

class PropietarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "dni" => $this->dni,
            "nombre" => $this->nombre,
            "apellidos" => $this->apellidos,
            "construcciones" => ConstruccionResource::collection($this->construcciones),
        ];
    }
}
