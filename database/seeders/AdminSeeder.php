<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'Name' => 'Administrator',
                'email' => 'adimchiudo@gmail.com',
                'password' => '$2y$10$7Bmc1n7QJlpWBXu.We9FculfMyMWpCNqlRFXpbsJ1GR09aj3twc/2',
                'role_id' => 2
            ]
            ];

            foreach($admins as $admin){
                User::updateOrCreate($admin);
            }
    }
}
