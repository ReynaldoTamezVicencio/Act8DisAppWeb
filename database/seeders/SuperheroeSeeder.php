<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SuperheroeSeeder extends Seeder
{
    public function run()
    {
        DB::table('superheroes')->insert([
            [
                'nombre_real' => 'Clark Kent',
                'nombre_superheroe' => 'Superman',
                'foto_url' => 'superheroes/superman.jpg',
                'informacion_adicional' => 'Reportero en el Daily Planet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Bruce Wayne',
                'nombre_superheroe' => 'Batman',
                'foto_url' => 'superheroes/batman.jpg',
                'informacion_adicional' => 'Vigilante de Gotham',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Diana Prince',
                'nombre_superheroe' => 'Wonder Woman',
                'foto_url' => 'superheroes/wonder_woman.jpg',
                'informacion_adicional' => 'Amazona de Themyscira',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Tony Stark',
                'nombre_superheroe' => 'Iron Man',
                'foto_url' => 'superheroes/iron_man.jpg',
                'informacion_adicional' => 'Genio, millonario, playboy, filántropo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Steve Rogers',
                'nombre_superheroe' => 'Capitán América',
                'foto_url' => 'superheroes/cap_america.jpg',
                'informacion_adicional' => 'Super soldado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Peter Parker',
                'nombre_superheroe' => 'Spider-Man',
                'foto_url' => 'superheroes/spiderman.jpg',
                'informacion_adicional' => 'Fotógrafo y estudiante',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Thor Odinson',
                'nombre_superheroe' => 'Thor',
                'foto_url' => 'superheroes/thor.jpg',
                'informacion_adicional' => 'Dios del trueno',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Barry Allen',
                'nombre_superheroe' => 'Flash',
                'foto_url' => 'superheroes/flash.jpg',
                'informacion_adicional' => 'El hombre más rápido del mundo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Arthur Curry',
                'nombre_superheroe' => 'Aquaman',
                'foto_url' => 'superheroes/aquaman.jpg',
                'informacion_adicional' => 'Rey de Atlantis',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre_real' => 'Natasha Romanoff',
                'nombre_superheroe' => 'Black Widow',
                'foto_url' => 'superheroes/black_widow.jpg',
                'informacion_adicional' => 'Espía de SHIELD',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}

