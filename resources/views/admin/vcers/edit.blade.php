@extends('admin.share.layout.master')
@section('title', 'Vcers - Add')

@section('content')
    <div class="edit-vcer">
        <h3>Chỉnh sửa thông tin nhân viên vcer</h3>
        <div class="main">
            <form action="" method="POST">
                @method('PUT')
                @csrf
                <div class="input-text">
                    <div class="item form-group">
                        <div class="title-input">Họ và tên</div>
                        <input type="text" name="name" class="custom-input form-control" value="{{$editVcer->name}}">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Căn cước công dân</div>
                        <input type="text" name="cmnd" class="custom-input form-control" value="{{$editVcer->identification}}">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Địa chỉ</div>
                        <input type="text" name="address" class="custom-input form-control" value="{{$editVcer->address}}">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Số điện thoại</div>
                        <input type="text" name="phone" class="custom-input form-control" value="{{$editVcer->phone}}">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Tuổi</div>
                        <input type="text" name="age" class="custom-input form-control" value="{{$editVcer->age}}">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Ngày có thể làm được</div>
                        <input type="text" name="date" class="custom-input form-control" value="{{$editVcer->date}}">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Thời điểm có thể làm</div>
                        <input type="text" name="time" class="custom-input form-control" value="{{$editVcer->time}}">
                    </div>
                    <div class="item form-group">
                        <div class="title-input">Tình trạng trước đây</div>
                        <input type="text" name="status" class="custom-input form-control" value="{{$editVcer->status}}">
                    </div>
                    <div class="list-btn">
                        <button type="reset" class="btn btn-dark">Return</button>
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
                <div class="input-image">
                    <div class="title">
                        Ảnh đại diện | Chọn ảnh
                    </div>
                    <div class="box-image"></div>
                    <input type="file" name="image" class="input-image">
                </div>
            </form>
        </div>
    </div>
@endsection
