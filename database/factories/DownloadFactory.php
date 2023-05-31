<?php

namespace Database\Factories;

use App\Models\Download;
use Illuminate\Database\Eloquent\Factories\Factory;

class DownloadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Download::class;

    public function definition()
    {
        return [
            'nombre_estudiante' => $this->faker->name(),
            'tipo_participante' => $this->faker->randomElement(['Estudiante', 'Egresado', 'Externo']),
            'email' => $this->faker->safeEmail(),
            'tipo_documento' => $this->faker->randomElement(['CC', 'CE', 'TI', 'PA', 'RC']),
            'numero_documento' => $this->faker->unique()->ean8(),
            'nombre_producto' => $this->faker->randomElement(['Curso de programacion', 'Curso de manejo de emociones', 'Curso de empleabilidad', 'Curso de diseño de HV', 'Curso de costura']),
            'fecha_realización' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'fecha_descarga' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'duración' => $this->faker->numberBetween($min = 30, $max = 100),
            'modalidad' => $this->faker->randomElement(['Virtual', 'Presencial']),
            'ciudad_expedición' => "Bogotá",
        ];
    }
}
