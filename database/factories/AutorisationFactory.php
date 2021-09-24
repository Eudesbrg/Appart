<?php

namespace Database\Factories;

use App\Models\Autorisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutorisationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Autorisation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'autorisation'=>$this->faker->word(),
        ];
    }
}
