<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Jared Mwanduka',
            'email' => 'jaredmwanduka@gmail.com',
            'password' => Hash::make('password'),
            //'role' => true,
            'email_verified_at' => Carbon::now(),
        ]);

        $role = Role::find(1);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
