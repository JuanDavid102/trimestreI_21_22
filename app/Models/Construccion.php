<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Construccion extends Model
{
    use HasFactory;

    protected $table = 'construcciones';
    public function propietario()
    {
        return $this->belongsTo(Propietario::class,'propietario');
    }
}
