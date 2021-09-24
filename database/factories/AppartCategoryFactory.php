<?php

namespace Database\Factories;

use App\Models\AppartCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppartCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppartCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nom = $this->faker->name;
        return [
            'nom' => $nom,
            'slug' => implode('_',explode(" ",$nom)),
        ];
    }
}
