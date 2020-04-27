<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'service_name' => 'Tổng vệ sinh',
            'service_image' => '',
            'service_new' => '1',
            'service_des'=>'dọn dẹp sạc sẽ theo dúng số tiếng b đã đăng ký dọn dẹp. hãy yêu cầu những vị trí cần dọn dẹp cho chúng tôi để công việc đk dẽ dàng và nhanh nhát có thể',
        ];
        \App\Model\Service::create($data);
    }
}
