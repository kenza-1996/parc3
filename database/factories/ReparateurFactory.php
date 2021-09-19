<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Reparateur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReparateurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reparateur::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'adresse' => $this->faker->address,
            'societe'=>$this->faker->name,
            'disponibilite' => array_rand(["disponible", "indisponible"], 1),
            'email' => $this->faker->unique()->safeEmail(),
            'telephone' => $this->faker->unique()->phoneNumber,
        ];
    }
}
