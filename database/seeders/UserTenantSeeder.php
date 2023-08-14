<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTenantSeeder extends Seeder
{
    public function run(): void
    {
        $userTenant = [
            [
                'user_id' => '2',
                'tenant_id' => '1'
            ],
            [
                'user_id' => '2',
                'tenant_id' => '2'
            ],
            [
                'user_id' => '3',
                'tenant_id' => '2'
            ],
            [
                'user_id' => '4',
                'tenant_id' => '3'
            ],
            [
                'user_id' => '5',
                'tenant_id' => '4'
            ],
            [
                'user_id' => '5',
                'tenant_id' => '1'
            ],
            [
                'user_id' => '6',
                'tenant_id' => '5'
            ],
        ];

        foreach ($userTenant as $Data) {
            DB::table('user_tenants')->insert($Data);
        }
    }
}
