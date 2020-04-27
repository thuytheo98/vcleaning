<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'emp_name' =>'Lee Ha',
            'emp_address'=>'HN',
            'emp_identification'=>'124342',
            'emp_phone'=>'32443',
            'emp_gender'=>'nu',
            'emp_birthday'=> '2020-03-12',
            'emp_email'=>'thuytheo34@gmail.com',
            'emp_username'=>'ha',
            'emp_password'=> \Illuminate\Support\Facades\Hash::make('1234'),
            'emp_role'=>'1'
        ];
        \App\Model\Employee::create($data);
    }
}
