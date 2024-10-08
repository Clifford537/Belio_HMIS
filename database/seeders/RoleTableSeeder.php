<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Doctor']);
        Role::create(['name' => 'Nurse']);
        Role::create(['name' => 'Staff']);
        Role::create(['name' => 'Management']);
        Role::create(['name' => 'user']);
    }
}
