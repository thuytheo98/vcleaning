<?php

use Illuminate\Database\Seeder;

class VcerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'vcer_name' => 'thuy',
            'vcer_identification' => '017369196',
            'vcer_address' =>'Hn',
            'vcer_phone' => '0395979590',
            'vcer_age' => '25',
            'vcer_date' => 'ca tuan',
            'vcer_time'=> 'sang',
            'vcer_experience' => 'chua di lam dau'
        ];
        \App\Model\Vcers::create($data);
    }
}
