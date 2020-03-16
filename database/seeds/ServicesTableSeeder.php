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
            'sv_name' => 'Tổng vệ sinh',
            'description'=>'dọn dẹp sạc sẽ theo dúng số tiếng b đã đăng ký dọn dẹp. hãy yêu cầu những vị trí cần dọn dẹp cho chúng tôi để công việc đk dẽ dàng và nhanh nhát có thể',
            'sub_id'=>'1',
            'detail_sv_id'=>'1',
        ];
        \App\Model\Service::create($data);
    }
}
