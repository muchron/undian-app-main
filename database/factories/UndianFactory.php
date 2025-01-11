<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UndianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid(),
            'nomor_undian' => $this->faker->randomNumber(),
            'nama_peserta' => $this->faker->name()
        ];
    }
}
