<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Model::unguard();
        Schema::disableForeignKeyConstraints();

        $this->call(MunicipiosTableSeeder::class);

        $this->call(LocalidadesTableSeeder::class);

        $this->call(TerremotosTableSeeder::class);

        self::seedUsers();

        Model::reguard();

        Schema::enableForeignKeyConstraints();
    }

    private static function seedUsers()
    {
        User::truncate();
        $u = new User;
        $u->name = "JuanDavid";
        $u->email = "11236647@alu.murciaeduca.es";
        $u->password = bcrypt("123456");
        $u->save();
    }
}
