<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(AddressSeeder::class);
        $this->call(BankNameSeeder::class);
        $this->call(BankAccountSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(CartSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
