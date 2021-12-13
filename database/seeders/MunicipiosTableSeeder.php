<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;

class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedMunicipio();
    }

    private static function seedMunicipio()
    {
        Municipio::truncate();
        foreach (self::$municipios as $municipio) {
            $m = new Municipio;
            $m->nombre = $municipio["nombre"];
            $m->poblacion = $municipio["poblacion"];
            $m->save();
        }
    }

    private static $municipios = array (
        array (
          "nombre" => 'Barlovento',
          "poblacion" => '1926',
        ),
        array (
          "nombre" => 'Breña Alta',
          "poblacion" => '7247',
        ),
        array (
          "nombre" => 'Breña Baja',
          "poblacion" => '5821',
        ),
        array (
          "nombre" => 'El Paso',
          "poblacion" => '7623',
        ),
        array (
          "nombre" => 'Fuencaliente de la Palma',
          "poblacion" => '1751',
        ),
        array (
          "nombre" => 'Garafía',
          "poblacion" => '1730',
        ),
        array (
          "nombre" => 'Los Llanos de Aridane',
          "poblacion" => '20760',
        ),
        array (
          "nombre" => 'Puntagorda',
          "poblacion" => '2203',
        ),
        array (
          "nombre" => 'Puntallana',
          "poblacion" => '2553',
        ),
        array (
          "nombre" => 'San Andrés y Sauces',
          "poblacion" => '4182',
        ),
        array (
          "nombre" => 'Santa Cruz de la Palma',
          "poblacion" => '15695',
        ),
        array (
          "nombre" => 'Tazacorte',
          "poblacion" => '4601',
        ),
        array (
          "nombre" => 'Tijarafe',
          "poblacion" => '2507',
        ),
        array (
          "nombre" => 'Villa de Mazo',
          "poblacion" => '4859',
        ),
    );
}
