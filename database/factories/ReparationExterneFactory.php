<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Reparations_Externe;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReparationExterneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reparations_Externe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "designation" =>$this->faker->text(),
           "date_panne" =>$this->faker->date(),
            "date_sortie" =>$this->faker->date(),
            "date_retour"=>$this->faker->date(),
            "etat" =>array_rand(["en panne", "en cour", "repare"], 1)
        ];
    }
}
