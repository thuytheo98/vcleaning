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
                        <input type="text" class="text-item" name="name" value="{{$edit->emp_name}}" required>
                    </div>
                    <div class="item">
                        <div class="title">Quyền nhân viên</div>
                        <input type="text" class="text-item" name="role" value="Nhân viên">
                    </div>
                    <div class="item">
                        <div class="title">Email</div>
                        <input type="email" class="text-item" name="email" value="{{$edit->emp_email}}" required>
                    </div>
                    <div class="item">
                        <div class="title">Số điện thoại</div>
                        <input type="number" class="text-item" name="phone" value="{{$edit->emp_phone}}" required>
                    </div>
                    <div class="item">
                        <div class="title">Ngày sinh</div>
                        <input type="date" class="text-item" name="birth" value="{{$edit->emp_birthday}}" required>
                    </div>
                    <div class="item">
                        <div class="title">Giới tính</div>
                        <input type="text" class="text-item" name="gender" value="{{$edit->emp_gender}}" required>
                    </div>
                    <div class="item">
                        <div class="title">Địa chỉ</div>
                        <input type="text" class="text-item" name="address" value="{{$edit->emp_address}}" required>
                    </div>
                    <div class="item">
                        <div class="title">Thẻ căn cước</div>
                        <input type="number" class="text-item" name="identification" value="{{$edit->emp_identification}}" required>
                    </div>
                    <div class="item">
                        <div class="title">Mã nhân viên</div>
                        <input type="number" class="text-item" name="emp_id" value="{{$edit->emp_id}}" placeholder="Mã nhân viên tự sinh" disabled>
                    </div>
                    <div class="image-emp">
                        <img src="" alt="">
                        <input type="file" name="image">
                    </div>
                    <div class="btn-create">
                        <button type="submit" name="update">Cập nhật thông tin</button>
                    </div>
                    <div class="btn-delete">
                        <button type="submit" name="delete">Xóa nhân viên</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
