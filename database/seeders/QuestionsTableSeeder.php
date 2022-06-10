<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create([   
            'title' => 'pregunta numero 1', 
            'description' => 'Respuesta a pregunta 1 Solución Completa desde registro de dominio, hosting, web ..', 
            'state'=>1,
            'order' => 1
        ]);

        Question::create([   
            'title' => 'pregunta numero 2', 
            'description' => 'Respuesta a pregunta 1 Solución Completa desde registro de dominio, hosting, web ..', 
            'state'=>1,
            'order' => 2
        ]);

        Question::create([   
            'title' => 'pregunta numero 3', 
            'description' => 'Respuesta a pregunta 1 Solución Completa desde registro de dominio, hosting, web ..', 
            'state'=>1,
            'order' => 3
        ]);

        Question::create([   
            'title' => 'pregunta numero 4', 
            'description' => 'Respuesta a pregunta 1 Solución Completa desde registro de dominio, hosting, web ..', 
            'state'=>1,
            'order' => 4
        ]);

        Question::create([   
            'title' => 'pregunta numero 5', 
            'description' => 'Respuesta a pregunta 1 Solución Completa desde registro de dominio, hosting, web ..', 
            'state'=>1,
            'order' => 5
        ]);

        Question::create([   
            'title' => 'pregunta numero 6', 
            'description' => 'Respuesta a pregunta 1 Solución Completa desde registro de dominio, hosting, web ..', 
            'state'=>1,
            'order' => 6
        ]);


    }
}
