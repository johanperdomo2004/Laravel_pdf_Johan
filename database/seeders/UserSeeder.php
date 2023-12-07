<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            'nombre' => 'Frand',
            'cedula' => '1004268668',
            'telefono' => '3213570619',
            'direccion' => 'cra 3 #45-12'
        ]);
    }
}
