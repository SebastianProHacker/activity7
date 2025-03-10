<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class KitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kits_de_roboticas')->insert([ 
            [
                'nombre' => 'StarterKit', // it will create a  random word with 10 digits 
                'contenido' => 'blablbablablablabalbalablaba', // random email with 10 digits 
            ],
            [
                'nombre' => 'Educational Robotics Kit', // it will create a  random word with 10 digits 
                'contenido' => 'blabalbalbalbalbalbalbalbalbalbalbal', // random email with 10 digits 
            ],
            [
                'nombre' => 'Kit5', // it will create a  random word with 10 digits 
                'contenido' => 'blablabalblablablalablablabab', // random email with 10 digits 
            ],
            
          ]); 
    }
}
