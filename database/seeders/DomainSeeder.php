<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Example: Create domains for each tenant
        $tenants = Tenant::all();

        foreach ($tenants as $tenant) {
            $subdomain = $tenant->id;
            $domain = $subdomain . '.localhost';

            $tenant->domains()->create(['domain' => $domain]);
        }
    }
}
