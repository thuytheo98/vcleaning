@extends('admin.share.layout.master')
@section('content')
    <div class="add-employee">
        <div class="add-title">
            <h3>Chỉnh sửa thông tin nhân viên</h3>
        </div>
        <div class="form" style="display: flex; flex-direction: row; justify-content: center;" >
            <form action="{{route('admin.employees.update', $edit->emp_id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="create-info">
                    <div class="add-title">Chỉnh sửa thông tin</div>
                    <div class="image">
                        <div class="input-image">
                            <div class="title">
                                Ảnh đại diện | Chọn ảnh
                            </div>
                            <div class="box-image">
                                <img src="" alt="" id="output" class="image-file" style="width: 200px;  height: 200px; border-radius: 200px;">
                            </div>
                            <input type="file" name="image" class="open-image" id="image">
                        </div>
                    </div>
                    <div class="information">
                        <div class="item form-group">
                            <div class="title">Họ và tên</div>
                            <input type="text" class="text-item form-control" name="name" value="{{$edit->emp_name}}" required>
                        </div>
                        <div class="item form-group">
                            <div class="title">CMND</div>
                            <input type="text" class="text-item form-control" name="cmnd" value="{{$edit->emp_identification}}" required>
                        </div>
                        <div class="item form-group">
                            <div class="title">Địa chỉ</div>
                            <input type="text" class="text-item form-control" name="address" value="{{$edit->emp_address}}" required>
                        </div>
                        <div class="item form-group">
                            <span class="title">Số điện thoại</span>
                            <input type="text" class="text-item form-control" name="phone" value="{{$edit->emp_phone}}" required style="width: 30%;">
                        </div>
{{--                        <div>{{$edit->gender}}</div>--}}
                        <div class="item form-group">
                            <div class="title">Giới tính</div>
                            <div class="gender">
                                <label class="radio-inline" style="margin-right: 20px;">
                                    <input type="radio" name="gender" value="0" {{ ($edit->emp_gender == "0")? "checked" : "" }} style="cursor:pointer; width: 30px;"><span class="title">Nam</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="1" {{ ($edit->emp_gender=="1")? "checked" : "" }} style="cursor:pointer; width: 30px;"><span class="title">Nữ</span>
                                </label>
                            </div>
                        </div>
                        <div class="item form-group">
                            <span class="title">Ngày sinh</span>
                            <input type="date" class="text-item form-control" name="birth" value="{{$edit->emp_birthday}}" style="width: 50%;" required>
                        </div>
                        <div class="item form-group">
                            <div class="title">Email</div>
                            <input type="text" class="text-item form-control" name="email" value="{{$edit->emp_email}}" required>
                        </div>
                    </div>
                </div>
                <div class="create-account">
                    <div class="add-title">Sửa tài khoản cho nhân viên</div>
                    <div class="item form-group">
                        <div class="title">Username</div>
                        <input type="text" class="text-item form-control" name="username" value="{{$edit->emp_username}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title">Password</div>
                        <input type="password" class="text-item form-control" name="password" value="{{$edit->password}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title">Nhập lại password</div>
                        <input type="password" class="text-item form-control" name="re-password" value="">
                    </div>
                    <div class="item form-group">
                        <div class="title">Chọn quyền đăng nhập</div>
                        <select name="role" id="" class="form-control">
                            <option value="1" {{ ($edit->emp_role=="1")? "selected" : "" }}>Quản lý</option>
                            <option value="2" {{ ($edit->emp_role=="2")? "selected" : "" }}>Nhân viên</option>
                        </select>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="list-btn">
                    <button type="submit" name="_method" value="delete" class="btn btn-dark">Xóa</button>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        document.querySelector('input[type="file"]').addEventListener('change', function () {
            var file = this.files;
            var imagename = file[0];
            //tao file reader
            var fileReader = new FileReader();
            fileReader.onload = function () {
                var url = fileReader.result;
                var output = document.getElementById('output');
                output.src = url;
            }
            fileReader.readAsDataURL(imagename);
        });
    </script>
    @endsection
