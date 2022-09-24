<?php

namespace Database\Factories;

use App\Models\Jenis;
use App\Models\Ruangan;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsetDiamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $jenis_id = Jenis::all()->random()->id;
        $ruangan_id = Ruangan::all()->random()->id;
        return [
            'jenis_id' => $jenis_id,
            'ruangan_id' => $ruangan_id,
            'nama' => $this->faker->company(),
            'merk' => $this->faker->jobTitle(),
            'jmlh' => $this->faker->randomNumber(2, false),
            'satuan' => $this->faker->randomElement(['Unit', 'Pcs', 'Set']),
            'ket' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
        ];
    }
}
