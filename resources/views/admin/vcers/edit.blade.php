@extends('admin.share.layout.master')
@section('title', 'Admin - Vcers')

@section('content')
    <div class="edit-vcer">
        <h3>Chỉnh sửa thông tin nhân viên vcer</h3>
        <div class="main">
            <form action="{{route('admin.vcers.update', $editVcer->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="input-text">
                    <div class="item form-group">
                        <div class="title-input">Họ và tên</div>
                        <input type="text" name="name" class="custom-input form-control" value="{{$editVcer->name}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Căn cước công dân</div>
                        <input type="text" name="cmnd" class="custom-input form-control" value="{{$editVcer->identification}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Địa chỉ</div>
                        <input type="text" name="address" class="custom-input form-control" value="{{$editVcer->address}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Số điện thoại</div>
                        <input type="text" name="phone" class="custom-input form-control" value="{{$editVcer->phone}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Tuổi</div>
                        <input type="text" name="age" class="custom-input form-control" value="{{$editVcer->age}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Ngày có thể làm được</div>
                        <input type="text" name="date" class="custom-input form-control" value="{{$editVcer->date}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Thời điểm có thể làm</div>
                        <input type="text" name="time" class="custom-input form-control" value="{{$editVcer->time}}" required>
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Tình trạng trước đây</div>
                        <input type="text" name="status" class="custom-input form-control" value="{{$editVcer->status}}" required>
                    </div>
                    <div class="list-btn">
                        <button type="submit" name="_method" value="delete" class="btn btn-dark">Xoá</button>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
                <div class="input-image">
                    <form method="post" enctype="multipart/form-data">
                        <div class="title">
                            Ảnh đại diện | Chọn ảnh
                        </div>
                        <div class="box-image">
                            <img src="{{asset('images/vcers/'.$editVcer->images)}}" alt="" id="output" class="image-file" style="width: 200px;  height: 200px; border-radius: 200px;">
                        </div>
                        <input type="file" name="image" class="open-image" id="image">
                    </form>
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
