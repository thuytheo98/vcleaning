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
            'name' => 'thuy',
            'identification' => '017369196',
            'address' =>'Hn',
            'phone' => '0395979590',
            'images' => 'cap.jpg',
            'age' => '25',
            'date' => 'ca tuan',
            'time'=> 'sang',
            'status' => 'chua di lam dau'
        ];
        \App\Model\Vcers::create($data);
    }
}
