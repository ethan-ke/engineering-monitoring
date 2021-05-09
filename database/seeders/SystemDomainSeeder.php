<?php

namespace Database\Seeders;

use App\Models\SystemDomain;
use Illuminate\Database\Seeder;

class SystemDomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SystemDomain::insert([
            [
                'type'   => 'frontend-api',
                'domain' => 'api-monitoring.zuomo.net',
            ],
            [
                'type'   => 'backend-api',
                'domain' => 'api-monitoring.zuomo.net',
            ],
        ]);
    }
}
