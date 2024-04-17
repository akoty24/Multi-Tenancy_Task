<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Testing\Fakes\Fake;
use Faker\Factory as Faker;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Creating specific tenants Mohamed and Saber
        $specificTenants = [
            ['name' => 'Mohamed', 'email' => 'mohamed@example.com', 'address' => '123 Street, City, Country'],
            ['name' => 'Saber', 'email' => 'saber@example.com', 'address' => '456 Street, City, Country']
        ];

        foreach ($specificTenants as $specificTenant) {
            $tenantId = 'tenant_' . $faker->unique()->randomNumber(5);

            DB::table('tenants')->insert([
                'id' => $tenantId,
                'data' => json_encode($specificTenant),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Creating random tenants
        foreach (range(1, 8) as $index) {
            $tenantId = 'tenant_' . $faker->unique()->randomNumber(5);
            $data = [
                'name' => $faker->company,
                'email' => $faker->unique()->email,
                'address' => $faker->address,
            ];

            DB::table('tenants')->insert([
                'id' => $tenantId,
                'data' => json_encode($data),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}