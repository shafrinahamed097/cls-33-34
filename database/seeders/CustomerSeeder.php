<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        // Generate 30 dummy customers
        Customer::factory()->count(30)->create();
    }
    
}
