<?php

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
//         $this->call(UsersTableSeeder::class);
//         $this->call(EmployeeTableSeeder::class);
//         $this->call(ServicesTableSeeder::class);
//         $this->call(VcerTableSeeder::class);
//         $this->call(OrderTableSeeder::class);
//         $this->call(DetailServiceTableSeeder::class);
         $this->call(SubServiceTableSeeder::class);

    }
}
