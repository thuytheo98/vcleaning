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
            'user_name' => 'ha',
            'user_password' => \Illuminate\Support\Facades\Hash::make('1234'),
            'user_email' => 'ha@ominext.com'
        ];
        \App\Model\User::create($data);

        DB::table('user')->insert([
            'user_name' => 'thuy',
            'user_email' => 'thuytheo20101998@gmail.com',
            'user_password' => Hash::make('1234'),
        ]);
    }
}
