<?php

namespace Database\Seeders;

use App\Models\Relations\OneToOne\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customer = new Customer();
        $customer->id = "DIRA";
        $customer->name = "Dira";
        $customer->email = "dira@email.com";
        $customer->save();
    }
}
