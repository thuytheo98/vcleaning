<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'order_address' =>'Lee Ha',
            'order_payment'=>'HN',
            'order_date'=>'2020-03-12',
            'order_start_time'=>'08:30:05',
            'order_end_time'=>'08:30:05',
            'order_repeat'=> '3 6',
            'order_total'=>'400000',
            'service_id'=>'1',
            'user_id'=>'1',
            'emp_id'=>'1',
        ];
        \App\Model\Order::create($data);
    }
}
