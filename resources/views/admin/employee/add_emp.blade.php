@extends('admin.share.layout.master')
@section('content')
    <button class="btn-return">
        <a href="">Quay lại</a>
    </button>
    <div class="add-account">
        <div class="action-bar">
            <div class="float-left">
                <div class="title">Thiết lập thông tin nhân viên</div>
            </div>
            <div class="form">
                <form action="" method="post">
                    <div class="item">
                        <div class="title">Họ và tên</div>
                        <input type="text" class="text-item" name="name" value="" required>
                    </div>
                    <div class="item">
                        <div class="title">Số điện thoại</div>
                        <input type="number" class="text-item" name="phone" value="" required>
                    </div>
                    <div class="item">
                        <div class="title">Địa chỉ</div>
                        <input type="date" class="text-item" name="address" value="" required>
                    </div>
                    <div class="item">
                        <div class="title">Tuổi</div>
                        <input type="text" class="text-item" name="age" value="" required>
                    </div>
                    <div class="item">
                        <div class="title">Thẻ căn cước</div>
                        <input type="number" class="text-item" name="identification" value="" required>
                    </div>
                    <div class="item">
                        <div class="title">Mã nhân viên</div>
                        <input type="number" class="text-item" name="emp_id" value="" placeholder="Mã nhân viên tự sinh" disabled>
                    </div>
                    <div class="image-emp">
                        <img src="" alt="">
                        <input type="file" name="image">
                    </div>
                    <div class="btn-create">
                        <a type="submit" name="update">Cập nhật thông tin</a>
                    </div>
                    <div class="btn-delete">
                        <a type="submit" name="delete">Xóa nhân viên</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
