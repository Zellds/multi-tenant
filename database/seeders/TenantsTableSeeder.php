<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenantsTableSeeder extends Seeder
{
    public function run(): void
    {
        $tenants = [
            [
                'name' => 'Empresa Teste 1',
            ],
            [
                'name' => 'Empresa Teste 2',
            ],
            [
                'name' => 'Empresa Teste 3',
            ],
            [
                'name' => 'Empresa Teste 4',
            ],
            [
                'name' => 'Empresa Teste 5',
            ],
        ];

        foreach ($tenants as $tenantData) {
            DB::table('tenants')->insert($tenantData);
        }
    }
}
