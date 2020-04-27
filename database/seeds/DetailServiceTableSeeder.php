<?php

use Illuminate\Database\Seeder;

class DetailServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'detail_amount' => '50m2  1 người  2h',
            'detail_price' => '400000',
            'service_id' => '1',
            'detail_des'=>'dọn dẹp sạc sẽ theo dúng số tiếng b đã đăng ký dọn dẹp. hãy yêu cầu những vị trí cần dọn dẹp cho chúng tôi để công việc đk dẽ dàng và nhanh nhát có thể',
        ];
        \App\Model\DetailService::create($data);
    }
}
