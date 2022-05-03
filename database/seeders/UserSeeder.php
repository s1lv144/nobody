<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = Role ::create(['name' => 'administrador']);
        $role2 = Role::create(['name' => 'operador']);
        $role3 = Role::create(['name' => 'analista']);

        User::create([
            'name' => 'julio verne',
            'username' => 'testadmin',
            'email' => 'juliov@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('administrador');

        User::create([
            'name' => 'silvia uno',
            'username' => 'testanalista',
            'email' => 'silvia@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('analista');

        User::create([
            'name' => 'juan uno',
            'username' => 'testoperador',
            'email' => 'juanuno@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('operador');

        User::create([
            'name' => 'maria prueba',
            'username' => 'testsinper',
            'email' => 'mariapruebao@gmail.com',
            'password' => bcrypt('12345678')
        ]);


        //User::factory(10)->create();
    }
}
