<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}

/*'nombres' => 'Admin',
'apellidos' => 'Principal',
'teléfono' => '999999999',
'email' => 'admin@example.com',
'foto' => null,
'password' => Hash::make('password'),
'rol_id' => 1, //Administrador

  User::factory()->count(3)->create([
            'rol_id' => 2, //Consultores
        ]);

        User::factory()->count(10)->create([
            'rol_id' => 3, //Usuarios Comunes
        ]);*/
        
