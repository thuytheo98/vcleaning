@extends('admin.share.layout.master')
@section('title', 'Vcers - Add')

@section('content')
    <div class="add-vcer">
        <h3>Thêm thông tin nhân viên vcer</h3>
        <div class="main">
            <form action="" method="POST">
                @csrf
                <div class="item">
                    <div class=""><lable>Họ và tên</lable></div>
                    <div><input type="text" name="name"></div>
                </div>
                <div class="item">
                    <div class=""><lable>CMND</lable></div>
                    <div><input type="text" name="cmnd"></div>
                </div>
                <div class="item">
                    <div class=""><lable>Địa chỉ</lable></div>
                    <div><input type="text" name="address"></div>
                </div>
                <div class="item">
                    <div class=""><lable>Số điện thoại</lable></div>
                    <div><input type="text" name="phone"></div>
                </div>
                <div class="item">
                    <div class=""><lable>Tuổi</lable></div>
                    <div><input type="text" name="age"></div>
                </div>
                <div class="item">
                    <div class=""><lable>Ngày có thể làm được:</lable></div>
                    <div><input type="text" name="date"></div>
                </div>
                <div class="item">
                    <div class=""><lable>Thời điểm có thể làm đk</lable></div>
                    <div><input type="text" name="time"></div>
                </div>
                <div class="item">
                    <div class=""><lable>Tình trạng trước đây</lable></div>
                    <div><input type="text" name="status"></div>
                </div>
                <div class="image">
                    <div class="upload-image">
                        <div>Ảnh đại diện | Chọn ảnh</div>
                    </div>
                    <input type="file" name="image" class="input-image">
                </div>
            </form>
        </div>
    </div>
    @endsection
