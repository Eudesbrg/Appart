<?php

namespace Database\Factories;

use App\Models\Agrement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgrementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Agrement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->words(),
            'description'=>$this->faker->realTextBetween($minNbChars = 160, $maxNbChars = 200, $indexSize = 2),
        ];
    }
}
