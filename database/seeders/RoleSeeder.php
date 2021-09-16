<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use Carbon\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'customer',
                'alias' => 'customer'
            ],
            [
                'name' => 'Super Admin',
                'alias' => 'super-admin'
            ]
            ];

            foreach($roles as $role){
                Role::updateOrCreate($role);
            }
    }
}
