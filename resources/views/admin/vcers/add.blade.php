@extends('admin.share.layout.master')
@section('title', 'Admin - Vcers')

@section('content')
    <div class="add-vcer">
        <h3>Thêm thông tin nhân viên vcer</h3>
        <div class="main">
            <form action="{{route('admin.vcers.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="input-text">
                        <div class="item form-group">
                            <div class="title-input">Họ và tên</div>
                            <input type="text" name="name" class="custom-input form-control" required>
                        </div>
                        <div class="item form-group">
                            <div class="title-input">CMND</div>
                            <input type="text" name="cmnd" class="custom-input form-control" required>
                        </div>
                        <div class="item form-group">
                            <div class="title-input">Địa chỉ</div>
                           <input type="text" name="address" class="custom-input form-control" required>
                        </div>
                        <div class="item form-group">
                            <div class="title-input">Số điện thoại</div>
                           <input type="text" name="phone" class="custom-input form-control" required>
                        </div>
                        <div class="item form-group">
                            <div class="title-input">Tuổi</div>
                           <input type="text" name="age" class="custom-input form-control" required>
                        </div>
                        <div class="item form-group">
                            <div class="title-input">Ngày có thể làm được</div>
                            <input type="text" name="date" class="custom-input form-control" required>
                        </div>
                        <div class="item form-group">
                            <div class="title-input">Thời điểm có thể làm</div>
                            <input type="text" name="time" class="custom-input form-control" required>
                        </div>
                        <div class="item form-group">
                            <div class="title-input">Tình trạng trước đây</div>
                           <input type="text" name="status" class="custom-input form-control" required>
                        </div>
                        <div class="list-btn">
                            <button type="button" class="btn btn-dark">Back</button>
                            <button type="reset" class="btn btn-dark">Reset</button>
                            <button type="submit" class="btn btn-primary">ADD</button>
                        </div>
                    </div>
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
            </form>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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
