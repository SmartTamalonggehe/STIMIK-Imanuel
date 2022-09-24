<?php

namespace Database\Factories;

use App\Models\Jenis;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsetBergerakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jenis_id = Jenis::all()->random()->id;
        return [
            'jenis_id' => $jenis_id,
            'nama' => $this->faker->company(),
            'type' => $this->faker->jobTitle(),
            'merk' => $this->faker->bs(),
            'jmlh' => $this->faker->randomNumber(2, false),
            'ket' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
