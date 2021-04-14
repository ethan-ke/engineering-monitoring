<?php

namespace Database\Seeders;

use App\Models\BackendUser;
use Illuminate\Database\Seeder;

class BackendUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BackendUser::insert([
            [
                'nickname' => 'Administrator',
                'username' => 'admin',
                'password' => '$2y$10$X4TTwRwDNxz5Cl.cJ6D8DufyZVVULeSB6LTgtaDfqxXWC2mbMbicC',
            ]
        ]);
    }
}
