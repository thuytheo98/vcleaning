@extends('share.layout.master')
@section('title', 'Tuyển dụng')

@section('content')
    <div class="registration-vcer">
        <div class="quytrinhnhanvc">
            <h3>Quy trình đăng ký đi làm</h3>
            <div class="cacbuoc">
                <div class="buoc buoc1">
                    <p class="so-buoc">1</p>
                    <p class="title-buoc">Chuẩn bị hồ sơ</p>
                    <p class="ghichu-buoc">chứng minh thư, giấy sức khỏe, lý lịch cá nhân</p>
                </div>
                <div class="buoc buoc2">
                    <p class="so-buoc">2</p>
                    <p class="title-buoc">Phỏng vấn và hướng dẫn công việc</p>
                    <p class="ghichu-buoc">nghe tư vấn và hướng dẫn tay nghề miên phí</p>
                </div>
                <div class="buoc buoc3">
                    <p class="so-buoc">3</p>
                    <p class="title-buoc">Ký hợp đồng</p>
                    <p class="ghichu-buoc">ký kết, nhận dụng cụ và đồng phục</p>
                </div>
                <div class="buoc buoc4">
                    <p class="so-buoc">4</p>
                    <p class="title-buoc">Nhận việc</p>
                    <p class="ghichu-buoc">về nhà nhận việc và đi làm ngay!</p>
                </div>
            </div>
        </div>
        <form action="" class="formdangky" onsubmit="">
            <h3>Đăng ký đi làm ngay</h3>
            <div class="item">
                <div class="title-input">Họ và tên</div>
                <div class="container-input">
                    <input type="text" class="input-custom" name="name" required>
                </div>
            </div>
            <div class="item">
                <div class="title-input">Tuổi</div>
                <div class="container-input">
                    <input type="text" class="input-custom" name="age" required>
                </div>
            </div>
            <div class="item">
                <div class="title-input">Địa chỉ</div>
                <div class="container-input">
                    <input type="text" class="input-custom" name="address" required>
                </div>
            </div>
            <div class="item">
                <div class="title-input">Điện thoại</div>
                <div class="container-input">
                    <input type="text" class="input-custom" name="phone" required>
                </div>
            </div>
            <div class="btn-ok">
                <button type="submit" class="btn btn-lg">Đăng ký</button>
            </div>
        </form>
        <div class="quyenloi">
            <div class=""></div>
        </div>
    </div>
@endsection
