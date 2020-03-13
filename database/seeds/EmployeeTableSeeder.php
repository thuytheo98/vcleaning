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
            'name' =>'thuy', 'address'=>'HN', 'identification'=>'124342','phone'=>'32443',
            'gender'=>'nu', 'birthday'=> '2020-03-12', 'email'=>'thuytheo34@gmail.com', 'username'=>'ha', 'password'=> \Illuminate\Support\Facades\Hash::make('1234'),'role'=>'1'
        ];
        \App\Model\Employee::create($data);
    }
}
