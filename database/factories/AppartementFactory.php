<?php

namespace Database\Factories;

use App\Models\Appartement;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppartementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Appartement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
            'adresse'=>$this->faker->streetAddress(),
            'description'=>$this->faker->paragraphs(),
            'image'=>'lien pour image',
            'nombre_toilet'=>mt_rand(1,6),
            'nombre_lit'=> mt_rand(1,6),
            'superficie'=>$this->faker->randomFloat(2),
            'avance'=>$this->faker->numberBetween(2500, 4000),
            'monthPrice'=>$this->faker->numberBetween(300, 500),
            'category_id'=>mt_rand(1,5),
            'quartier_id'=>mt_rand(1,10),
        ];
    }
}
