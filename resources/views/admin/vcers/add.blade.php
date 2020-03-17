@extends('admin.share.layout.master')
@section('title', 'Vcers - Add')

@section('content')
    <div class="add-vcer">
        <h3>Thêm thông tin nhân viên vcer</h3>
        <div class="main">
            <form action="" method="POST">
                @csrf
                <div class="input-text">
                    <div class="item form-group">
                        <div class="title-input">Họ và tên</div>
                        <input type="text" name="name" class="custom-input form-control">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">CMND</div>
                        <input type="text" name="cmnd" class="custom-input form-control">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Địa chỉ</div>
                       <input type="text" name="address" class="custom-input form-control">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Số điện thoại</div>
                       <input type="text" name="phone" class="custom-input form-control">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Tuổi</div>
                       <input type="text" name="age" class="custom-input form-control">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Ngày có thể làm được</div>
                        <input type="text" name="date" class="custom-input form-control">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Thời điểm có thể làm</div>
                        <input type="text" name="time" class="custom-input form-control">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Tình trạng trước đây</div>
                       <input type="text" name="status" class="custom-input form-control">
                    </div>
                    <div class="list-btn">
                        <button type="reset" class="btn btn-dark">Return</button>
                        <button type="reset" class="btn btn-primary">ADD</button>
                    </div>
                </div>
                <div class="input-image">
                    <form method="post" enctype="multipart/form-data">
                        <div class="title">
                            Ảnh đại diện | Chọn ảnh
                        </div>
                        <div class="box-image">
                            <img src="" alt="" id="output">
                        </div>
                        <input type="file" name="image" class="open-image" id="image">
                    </form>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        document.getElementById('image').addEventListener('change', function (e) {
            console.log(e);
            var fileinput = e.target;
            var imagename = fileinput[0];

            //tao file reader
            var fileReader = new FileReader();
            fileReader.onload = function () {
                var url = fileReader.result;
                var output = document.getElementById('output');
                output.src = url;
            }
            fileReader.readAsDataURL(imagename);
        });
        var uploadImage = function(e) {
            // var image = document.getElementById('image').value;
            let file_name = $(e).val();
            console.log(file_name);
            var fileinput = e.target;
            var imagename = fileinput[0];

            //tao file reader
            var fileReader = new FileReader();
            fileReader.onload = function () {
                var url = fileReader.result;
                var output = document.getElementById('output');
                output.src = url;
            }
            fileReader.readAsDataURL(imagename);
        }
    </script>
    @endsection
