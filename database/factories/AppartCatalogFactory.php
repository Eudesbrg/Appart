<?php

namespace Database\Factories;

use App\Models\AppartCatalog;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppartCatalogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AppartCatalog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'=>'lien pour image',
        ];
    }
}
