<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'operador',
            'display_name' => 'Operador',
            'description' => 'Todos los permisos',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

        Role::create(['name' => 'usuario',
            'display_name' => 'Usuario',
            'description' => 'Permisos para llenar oficio',
            'created_at' => new DateTime,
            'updated_at' => new DateTime]);

    }
}
