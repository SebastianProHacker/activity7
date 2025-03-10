<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str; 

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([ 
            [
                'nombre' => 'Admon', // it will create a  random word with 10 digits 
                'correo' => 'admon@robotics.com', // random email with 10 digits 
                'contraseña' => Hash::make('Adm@2022'), // coded ‘password’ word
                'rol' => 'administración',
            ],
            [
                'nombre' => 'Tecmilenio', // it will create a  random word with 10 digits 
                'correo' => 'tecmilenio@robotics.com', // random email with 10 digits 
                'contraseña' => Hash::make('Adm@2022'), // coded ‘password’ word
                'rol' => 'maestro',
            ],
            [
                'nombre' => 'Estudiante', // it will create a  random word with 10 digits 
                'correo' => 'student@robotics.com', // random email with 10 digits 
                'contraseña' => Hash::make('Adm@2022'), // coded ‘password’ word
                'rol' => 'estudiante',
            ],
            
          ]); 
    }
}
