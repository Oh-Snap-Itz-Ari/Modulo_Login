<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Datos_Ejemplo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User::create([
            'name' => 'Cristhian Enrique Monrroy Bonilla',
            'email' => 'cmonrroy@ucundinamarca.edu.co',
            'password' => Hash::make('CristofoloColon$2000'),
            'email_verified_at' => '2021-05-07 02:49:38',
            'role' => '1',
        ]);
        $useradmin=User::create([
            'name' => 'Diego Alexander Diaz Velandia',
            'email' => 'diegoalexanderdiaz@ucundinamarca.edu.co',
            'password' => Hash::make('Insheloots@566'),
            'email_verified_at' => '2021-05-07 02:49:38',
            'role' => '1',
        ]);
        $useradmin=User::create([
            'name' => 'Alex Fabián Melo Gómez',
            'email' => 'afmelo@ucundinamarca.edu.co',
            'password' => Hash::make('MrBlueSky#9242'),
            'email_verified_at' => '2021-05-07 02:49:38',
            'role' => '1',
        ]);
        $user=User::create([
            'name' => 'Bryan Alejandro Galindo Muñoz',
            'email' => 'bryangm@ucundinamarca.edu.co',
            'password' => Hash::make('BryanGM!2020'),
            'email_verified_at' => '2021-05-07 02:49:38',
            'role' => '0',
        ]);
    }
}
