<?php

use Illuminate\Database\Seeder;

class SubServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'sub_name' => 'la quan ao',
            'sub_price' => '400000',
            'service_id' => '1',
            'sub_des'=>'auto cong them 1h',
        ];
        \App\Model\Subservice::create($data);
    }
}
