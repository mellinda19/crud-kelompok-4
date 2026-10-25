<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Siswa;

class SiswaFactory extends Factory
{
    protected $model = Siswa::class;

    public function definition(): array
    {
        $kelas = ['X PPLG', 'XI PPLG', 'XII PPLG'];
        $jurusan = ['PPLG', 'TKJ', 'MM'];

        return [
            'nis' => $this->faker->unique()->numerify('#####'),
            'nama' => $this->faker->name(),
            'kelas' => $this->faker->randomElement($kelas),
            'jurusan' => $this->faker->randomElement($jurusan),
            'tanggal_lahir' => $this->faker->date(),
            'alamat' => $this->faker->address(),
            'keterangan' => $this->faker->sentence(),
        ];
    }
}
