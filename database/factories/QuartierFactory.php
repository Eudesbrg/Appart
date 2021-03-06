<?php

namespace Database\Factories;

use App\Models\Quartier;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuartierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Quartier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->name,
            'image'=>'lien pour image',
            'ville_id'=>1,
        ];
    }
}
