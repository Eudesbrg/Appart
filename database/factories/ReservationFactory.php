<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'appartement_id'=>mt_rand(1,10),
            'user_id'=>mt_rand(1,10),
            'agent_id'=>mt_rand(1,10),
            'state_id'=>mt_rand(1,3),
            'contrat'=>$this->faker->realText(),
        ];
    }
}
