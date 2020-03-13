<?php

use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data k dk tao nen d check dk
        $data = [
            'name' => 'ha',
            'password' => \Illuminate\Support\Facades\Hash::make('1234'),
            'email' => 'ha@ominext.com'
        ];
        \App\Model\User::create($data);

        DB::table('users')->insert([
            'name' => 'thuy',
            'email' => 'thuytheo20101998@gmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
