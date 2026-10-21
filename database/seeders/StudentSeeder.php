<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 25; $i++) {
            $gender = fake()->randomElement(['Laki-Laki', 'Perempuan']);

            DB::table('students')->insert([
                'nama' => $gender === 'Laki-Laki'
                    ? fake('id_ID')->name('male')
                    : fake('id_ID')->name('female'),

                'email' => fake()->unique()->safeEmail(),

                'kelas' => fake()->randomElement(['X', 'XI', 'XII']),

                'jurusan' => fake()->randomElement([
                    'RPL',
                    'TKJ',
                    'TKR',
                    'TB',
                    'AKL'
                ]),

                'alamat' => fake('id_ID')->address(),

                'jenis_kelamin' => $gender,

                'created_at' => now()
            ]);
        }
    }
}