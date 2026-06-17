<?php

namespace Database\Factories;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends Factory<Pasien>
 */
class PasienFactory extends Factory
{
    protected $model = Pasien::class;

    protected static ?string $password;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            // NOTE: id_pasien is a string primary key (len 10)
            'id_pasien' => $this->faker->unique()->bothify('##########'),

            // If your column exists, this should be unique (len 16).
            // If you removed the nik column in a later migration, remove this key.
            'nik' => $this->faker->unique()->bothify('################'),

            'nama' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => static::$password ??= Hash::make('password'),
            'no_hp' => $this->faker->unique()->numerify('08###########'),
            'tgl_lahir' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(['L', 'P']),
            'alamat' => $this->faker->address(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
