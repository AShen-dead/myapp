<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cat;

class CatFactory extends Factory
{
    protected $model = Cat::class;

    public function definition(): array
    {
        $breeds = ['Persian', 'Siamese', 'Maine Coon', 'Bengal', 'Ragdoll', 'British Shorthair'];
        $colors = ['Black', 'White', 'Orange', 'Gray', 'Calico', 'Brown'];
        $names  = ['Luna','Milo','Oliver','Bella','Simba','Chloe','Leo','Mittens','Cleo','Oreo'];

        return [
            'name'  => $this->faker->randomElement($names),
            'breed' => $this->faker->randomElement($breeds),
            'age'   => $this->faker->numberBetween(1, 15),
            'color' => $this->faker->randomElement($colors),
        ];
    }
}
