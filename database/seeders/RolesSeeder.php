<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        Rol::create([
            'nombre_cargo' => 'Empleado',
        ]);

        Rol::create([
            'nombre_cargo' => 'Jefe',
        ]);
    }
}
