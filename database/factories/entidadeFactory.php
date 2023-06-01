<?php

namespace Database\Factories;
use App\Models\entidade;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\entidade>
 */
class entidadeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     *  @var string
     * 
     * @return array 
     * 
     * mixed>
     */
    protected $model = entidade::class;
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'dni' => $this->faker->randomNumber(8),
            'direccion' => $this->faker->address(),
            'celular' => $this->faker->phoneNumber(),
        ];
    }
}
