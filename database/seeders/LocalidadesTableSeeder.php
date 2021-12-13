<?php

namespace Database\Seeders;

use App\Models\Localidad;
use Illuminate\Database\Seeder;

class LocalidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedLocalidad();
    }

    private static function seedLocalidad()
    {
        Localidad::truncate();
        foreach (self::$localidades as $localidad) {
            $l = new Localidad;
            $l->nombre = $localidad["nombre"];
            $l->estado = $localidad["estado"];
            $l->poblacion = $localidad["poblacion"];
            $l->municipio_id = $localidad["municipio_id"];
            $l->save();
        }
    }

    private static $localidades = array (
        array (
          "nombre" => 'Barlovento',
          "estado" => 'Capital de municipio',
          "poblacion" => '629',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Camino Real',
          "estado" => 'Localidad',
          "poblacion" => '70',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Cuesta Alta',
          "estado" => 'Localidad',
          "poblacion" => '62',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Cuesta Baja',
          "estado" => 'Localidad',
          "poblacion" => '187',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'La Florida',
          "estado" => 'Localidad',
          "poblacion" => '37',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'La Hoya',
          "estado" => 'Localidad',
          "poblacion" => '48',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Las Paredes',
          "estado" => 'Localidad',
          "poblacion" => '99',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Lomo de la Cancela',
          "estado" => 'Localidad',
          "poblacion" => '118',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Lomo de la Fuente',
          "estado" => 'Localidad',
          "poblacion" => '56',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Lomo de los Castros',
          "estado" => 'Localidad',
          "poblacion" => '48',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Lomo Machín Alto',
          "estado" => 'Localidad',
          "poblacion" => '101',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Lomo Machín Bajo',
          "estado" => 'Localidad',
          "poblacion" => '122',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Lomo Romero',
          "estado" => 'Localidad',
          "poblacion" => '142',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'Los Marantes',
          "estado" => 'Localidad',
          "poblacion" => '25',
          "municipio_id" => '1',
        ),
        array (
          "nombre" => 'El Llanito',
          "estado" => 'Localidad',
          "poblacion" => '235',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'El Porvenir',
          "estado" => 'Localidad',
          "poblacion" => '309',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'La Caldereta',
          "estado" => 'Localidad',
          "poblacion" => '390',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'La Cuesta',
          "estado" => 'Localidad',
          "poblacion" => '173',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'La Grama',
          "estado" => 'Localidad',
          "poblacion" => '207',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'Palmasol',
          "estado" => 'Localidad',
          "poblacion" => '77',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'Palmasol Ii',
          "estado" => 'Localidad',
          "poblacion" => '93',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'San Miguel',
          "estado" => 'Localidad',
          "poblacion" => '91',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'San Pedro',
          "estado" => 'Capital de municipio',
          "poblacion" => '2420',
          "municipio_id" => '2',
        ),
        array (
          "nombre" => 'El Fuerte',
          "estado" => 'Localidad',
          "poblacion" => '115',
          "municipio_id" => '3',
        ),
        array (
          "nombre" => 'El Socorro',
          "estado" => 'Localidad',
          "poblacion" => '355',
          "municipio_id" => '3',
        ),
        array (
          "nombre" => 'La Montaña',
          "estado" => 'Localidad',
          "poblacion" => '317',
          "municipio_id" => '3',
        ),
        array (
          "nombre" => 'La Polvacera',
          "estado" => 'Localidad',
          "poblacion" => '809',
          "municipio_id" => '3',
        ),
        array (
          "nombre" => 'Las Ledas',
          "estado" => 'Localidad',
          "poblacion" => '370',
          "municipio_id" => '3',
        ),
        array (
          "nombre" => 'Los Cancajos',
          "estado" => 'Localidad',
          "poblacion" => '745',
          "municipio_id" => '3',
        ),
        array (
          "nombre" => 'San Antonio',
          "estado" => 'Localidad',
          "poblacion" => '1750',
          "municipio_id" => '3',
        ),
        array (
          "nombre" => 'San José',
          "estado" => 'Capital de municipio',
          "poblacion" => '1360',
          "municipio_id" => '3',
        ),
        array (
          "nombre" => 'Barrial de Arriba',
          "estado" => 'Localidad',
          "poblacion" => '175',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Barrial del Medio',
          "estado" => 'Localidad',
          "poblacion" => '25',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Barros',
          "estado" => 'Localidad',
          "poblacion" => '386',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Dos Pinos',
          "estado" => 'Localidad',
          "poblacion" => '282',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'El Barrial',
          "estado" => 'Localidad',
          "poblacion" => '93',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'El Calvario',
          "estado" => 'Localidad',
          "poblacion" => '28',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'El Paraíso',
          "estado" => 'Localidad',
          "poblacion" => '295',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'El Paso',
          "estado" => 'Capital de municipio',
          "poblacion" => '1329',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'El Pilar',
          "estado" => 'Localidad',
          "poblacion" => '530',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Fátima',
          "estado" => 'Localidad',
          "poblacion" => '592',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Jedey',
          "estado" => 'Localidad',
          "poblacion" => '117',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Las Rosas',
          "estado" => 'Localidad',
          "poblacion" => '504',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Lomo los Caballos',
          "estado" => 'Localidad',
          "poblacion" => '186',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Los Pedregales',
          "estado" => 'Localidad',
          "poblacion" => '201',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Malpaís',
          "estado" => 'Localidad',
          "poblacion" => '545',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'San Nicolás',
          "estado" => 'Localidad',
          "poblacion" => '254',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Tacande de Abajo',
          "estado" => 'Localidad',
          "poblacion" => '319',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Tacande de Arriba',
          "estado" => 'Localidad',
          "poblacion" => '385',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Tajuya',
          "estado" => 'Localidad',
          "poblacion" => '792',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Tendiña',
          "estado" => 'Localidad',
          "poblacion" => '191',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'Tenerra',
          "estado" => 'Localidad',
          "poblacion" => '258',
          "municipio_id" => '4',
        ),
        array (
          "nombre" => 'El Charco',
          "estado" => 'Localidad',
          "poblacion" => '30',
          "municipio_id" => '5',
        ),
        array (
          "nombre" => 'La Fajana',
          "estado" => 'Localidad',
          "poblacion" => '29',
          "municipio_id" => '5',
        ),
        array (
          "nombre" => 'Las Caletas',
          "estado" => 'Localidad',
          "poblacion" => '149',
          "municipio_id" => '5',
        ),
        array (
          "nombre" => 'Las Indias',
          "estado" => 'Localidad',
          "poblacion" => '523',
          "municipio_id" => '5',
        ),
        array (
          "nombre" => 'Los Canarios',
          "estado" => 'Capital de municipio',
          "poblacion" => '722',
          "municipio_id" => '5',
        ),
        array (
          "nombre" => 'Los Quemados',
          "estado" => 'Localidad',
          "poblacion" => '214',
          "municipio_id" => '5',
        ),
        array (
          "nombre" => 'Cueva del Agua',
          "estado" => 'Localidad',
          "poblacion" => '185',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'Don Pedro',
          "estado" => 'Localidad',
          "poblacion" => '33',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'El Castillo',
          "estado" => 'Localidad',
          "poblacion" => '65',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'El Tablado',
          "estado" => 'Localidad',
          "poblacion" => '38',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'Hoya Grande',
          "estado" => 'Localidad',
          "poblacion" => '50',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'La Mata',
          "estado" => 'Localidad',
          "poblacion" => '33',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'Las Tricias',
          "estado" => 'Localidad',
          "poblacion" => '112',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'Llano Negro',
          "estado" => 'Localidad',
          "poblacion" => '65',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'Los Castros',
          "estado" => 'Localidad',
          "poblacion" => '46',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'Roque del Faro',
          "estado" => 'Localidad',
          "poblacion" => '35',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'Santo Domingo',
          "estado" => 'Capital de municipio',
          "poblacion" => '80',
          "municipio_id" => '6',
        ),
        array (
          "nombre" => 'Argual',
          "estado" => 'Localidad',
          "poblacion" => '2520',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Bungalows de Tajuya',
          "estado" => 'Localidad',
          "poblacion" => '126',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Cruz Chica',
          "estado" => 'Localidad',
          "poblacion" => '225',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Cuatro Caminos',
          "estado" => 'Localidad',
          "poblacion" => '167',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Dos Pinos',
          "estado" => 'Localidad',
          "poblacion" => '93',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'El Pedregal',
          "estado" => 'Localidad',
          "poblacion" => '77',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'El Remo',
          "estado" => 'Localidad',
          "poblacion" => '212',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Hermosilla',
          "estado" => 'Localidad',
          "poblacion" => '72',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Jedey',
          "estado" => 'Localidad',
          "poblacion" => '44',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'La Condesa',
          "estado" => 'Localidad',
          "poblacion" => '33',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'La Laguna',
          "estado" => 'Localidad',
          "poblacion" => '309',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Las Manchas',
          "estado" => 'Localidad',
          "poblacion" => '139',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Las Martelas',
          "estado" => 'Localidad',
          "poblacion" => '276',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Las Rosas',
          "estado" => 'Localidad',
          "poblacion" => '190',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Los Barros',
          "estado" => 'Localidad',
          "poblacion" => '594',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Los Llanos de Aridane',
          "estado" => 'Capital de municipio',
          "poblacion" => '3646',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Los Palomares',
          "estado" => 'Localidad',
          "poblacion" => '64',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Los Pedregales',
          "estado" => 'Localidad',
          "poblacion" => '462',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Malpaís de Triana',
          "estado" => 'Localidad',
          "poblacion" => '134',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Montaña Tenisca',
          "estado" => 'Localidad',
          "poblacion" => '2547',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Puerto Naos',
          "estado" => 'Localidad',
          "poblacion" => '636',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Retamar',
          "estado" => 'Localidad',
          "poblacion" => '2659',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Tendiña',
          "estado" => 'Localidad',
          "poblacion" => '126',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Todoque',
          "estado" => 'Localidad',
          "poblacion" => '206',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Triana',
          "estado" => 'Localidad',
          "poblacion" => '1375',
          "municipio_id" => '7',
        ),
        array (
          "nombre" => 'Pino de la Virgen',
          "estado" => 'Capital de municipio',
          "poblacion" => '308',
          "municipio_id" => '8',
        ),
        array (
          "nombre" => 'Puntagorda',
          "estado" => 'Localidad',
          "poblacion" => '124',
          "municipio_id" => '8',
        ),
        array (
          "nombre" => 'Brasil-Juan Carro',
          "estado" => 'Localidad',
          "poblacion" => '77',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Casco',
          "estado" => 'Localidad',
          "poblacion" => '266',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Cercado Peñón-El Posito',
          "estado" => 'Localidad',
          "poblacion" => '43',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Cruz Herrera-El Topo',
          "estado" => 'Localidad',
          "poblacion" => '98',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'El Corcho',
          "estado" => 'Localidad',
          "poblacion" => '40',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'El Mocanero-Cuesta Medina',
          "estado" => 'Localidad',
          "poblacion" => '97',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'El Taboco-Montaña Loral',
          "estado" => 'Localidad',
          "poblacion" => '39',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Fuente Pino',
          "estado" => 'Localidad',
          "poblacion" => '84',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'La Camacha',
          "estado" => 'Localidad',
          "poblacion" => '61',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'La Lomada',
          "estado" => 'Localidad',
          "poblacion" => '34',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'La Lomada-Domingo Juan',
          "estado" => 'Localidad',
          "poblacion" => '66',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'La Lomadita',
          "estado" => 'Localidad',
          "poblacion" => '115',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'La Rivera',
          "estado" => 'Localidad',
          "poblacion" => '139',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Las Palmas-El Tributo',
          "estado" => 'Localidad',
          "poblacion" => '139',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Las Toscas',
          "estado" => 'Localidad',
          "poblacion" => '36',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Las Tricias-El Partido',
          "estado" => 'Localidad',
          "poblacion" => '84',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Llano Molino',
          "estado" => 'Localidad',
          "poblacion" => '172',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Lomo del Pino-la Verada',
          "estado" => 'Localidad',
          "poblacion" => '330',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Lomo Estrello',
          "estado" => 'Localidad',
          "poblacion" => '37',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Lomo Piñero',
          "estado" => 'Localidad',
          "poblacion" => '67',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Los Lirios-El Tomasin',
          "estado" => 'Localidad',
          "poblacion" => '69',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Los Molinos',
          "estado" => 'Localidad',
          "poblacion" => '44',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Los Perdomos',
          "estado" => 'Localidad',
          "poblacion" => '94',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'San Bartolomé',
          "estado" => 'Localidad',
          "poblacion" => '86',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'Viña Grande',
          "estado" => 'Localidad',
          "poblacion" => '24',
          "municipio_id" => '9',
        ),
        array (
          "nombre" => 'El Cardal',
          "estado" => 'Localidad',
          "poblacion" => '95',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Garachico',
          "estado" => 'Localidad',
          "poblacion" => '220',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Hoya Grande',
          "estado" => 'Localidad',
          "poblacion" => '157',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Llano el Pino',
          "estado" => 'Localidad',
          "poblacion" => '110',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Llano la Palma',
          "estado" => 'Localidad',
          "poblacion" => '45',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Los Sauces',
          "estado" => 'Capital de municipio',
          "poblacion" => '2069',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Orotava',
          "estado" => 'Localidad',
          "poblacion" => '62',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Quinta Zoca',
          "estado" => 'Localidad',
          "poblacion" => '60',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Ramírez',
          "estado" => 'Localidad',
          "poblacion" => '63',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'San Andrés',
          "estado" => 'Localidad',
          "poblacion" => '230',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'San Juan',
          "estado" => 'Localidad',
          "poblacion" => '32',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Verada Bajamar',
          "estado" => 'Localidad',
          "poblacion" => '56',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Verada de las Lomadas',
          "estado" => 'Localidad',
          "poblacion" => '238',
          "municipio_id" => '10',
        ),
        array (
          "nombre" => 'Miranda',
          "estado" => 'Localidad',
          "poblacion" => '607',
          "municipio_id" => '11',
        ),
        array (
          "nombre" => 'Santa Cruz de la Palma',
          "estado" => 'Capital de municipio',
          "poblacion" => '12833',
          "municipio_id" => '11',
        ),
        array (
          "nombre" => 'Puerto',
          "estado" => 'Localidad',
          "poblacion" => '1035',
          "municipio_id" => '12',
        ),
        array (
          "nombre" => 'Tazacorte',
          "estado" => 'Capital de municipio',
          "poblacion" => '2482',
          "municipio_id" => '12',
        ),
        array (
          "nombre" => 'El Pueblo',
          "estado" => 'Capital de municipio',
          "poblacion" => '489',
          "municipio_id" => '13',
        ),
        array (
          "nombre" => 'El Pueblo',
          "estado" => 'Capital de municipio',
          "poblacion" => '548',
          "municipio_id" => '14',
        ),
        array (
          "nombre" => 'Monte de Luna',
          "estado" => 'Localidad',
          "poblacion" => '231',
          "municipio_id" => '14',
        ),
        array (
          "nombre" => 'Monte de Pueblo',
          "estado" => 'Localidad',
          "poblacion" => '133',
          "municipio_id" => '14',
        ),
        array (
          "nombre" => 'Tigalate',
          "estado" => 'Localidad',
          "poblacion" => '116',
          "municipio_id" => '14',
        ),
    );
}
