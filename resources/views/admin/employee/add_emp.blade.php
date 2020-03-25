@extends('admin.share.layout.master')
@section('content')
    <div class="add-employee">
        <div class="add-title">
            <h3>Thiết lập thông tin nhân viên</h3>
        </div>
        <div class="form">
            <form action="{{route('admin.employees.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="create-info">
                    <div class="add-title">Thêm thông tin nhân viên</div>
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
                            <input type="text" class="text-item form-control" name="name" value="" id="name" required>
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="item form-group">
                            <div class="title">CMND</div>
                            <input type="text" class="text-item form-control" name="cmnd" id="cmnd" value="" required>
                            @error('cmnd')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="item form-group">
                            <div class="title">Địa chỉ</div>
                            <input type="text" class="text-item form-control" name="address" value="" required>
                        </div>
                        <div class="item form-group">
                            <span class="title">Số điện thoại</span>
                            <input type="text" class="text-item form-control" name="phone" value="" required style="width: 30%;">
                        </div>
                        <div class="item form-group">
                            <div class="title">Giới tính</div>
                            <div class="gender">
                                <label class="radio-inline" style="margin-right: 20px;">
                                    <input type="radio" name="gender" value="0" style="cursor:pointer; width: 30px;" checked><span class="title">Nam</span>
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="gender" value="1" style="cursor:pointer; width: 30px;" checked><span class="title">Nữ</span>
                                </label>
                            </div>
                        </div>
                        <div class="item form-group">
                            <span class="title">Ngày sinh</span>
                            <input type="date" class="text-item form-control" name="birth" value="" style="width: 50%;" required>
                        </div>
                        <div class="item form-group">
                            <div class="title">Email</div>
                            <input type="text" class="text-item form-control" name="email" value="" required>
                        </div>
                    </div>
                </div>
                <div class="create-account">
                    <div class="add-title">Tạo tài khoản cho nhân viên</div>
                    <div class="item form-group">
                        <div class="title">Username</div>
                        <input type="text" class="text-item form-control" name="username" value="" required>
                    </div>
                    <div class="item form-group">
                        <div class="title">Password</div>
                        <input type="password" class="text-item form-control" name="password" value="" required>
                    </div>
                    <div class="item form-group">
                        <div class="title">Nhập lại password</div>
                        <input type="password" class="text-item form-control" name="re_password" value="" required>
                    </div>
                    <div class="item form-group">
                        <div class="title">Chọn quyền đăng nhập</div>
                        <select name="role" id="" class="form-control">
                            <option value="1">Quản lý</option>
                            <option value="2">Nhân viên</option>
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
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-primary">ADD</button>
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
