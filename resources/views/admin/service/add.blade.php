@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
        <div class="add-service">
            <h2 class="add-title">Thêm mới dịch vụ</h2>
            <form action="{{route('admin.services.store')}}" method="POST">
                @csrf
                <div class="text-image-service row">
                    <div class="text-service-info col-6">
                        <div class="form-group">
                            <label>Tên dịch vụ</label>
                            <input type="text" id="sv_name" name="serviceName" class="form-control" style="width: 30%">
                        </div>
                        <div class="form-group">
                            <p>Mô tả về dịch vụ</p>
                            <textarea name="description" cols="50" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="image-service-info col-6">
                        <div class="image-service-content">
                            <div class="title">
                                Ảnh đại diện | Chọn ảnh
                            </div>
                            <div class="box-image">
                                <img src="" alt="" id="output" class="image-file" style="width: 200px;  height: 200px; border-radius: 200px;">
                            </div>
                            <input type="file" name="image" class="open-image" id="image">
                        </div>
                    </div>
                </div>
                <div class="list-btn">
                    <button type="button" class="btn btn-dark btn-lg">Back</button>
                    <button type="submit" class="btn btn-primary btn-lg">ADD</button>
                </div>
            </form>
        </div>
@endsection
