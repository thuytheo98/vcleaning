@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="add-detail-service">
        <form action="{{route('admin.detail.store')}}" method="POST">
            @csrf
            <h3>Thêm chi tiết dịch vụ</h3>
            <div>
                <div class="item form-group">
                    <label class="title-input">Tên dịch vụ</label>
                    <select name="service" class="form-control" style="width: 30%">
                        @foreach($sv as $s)
                            <option value="{{$s->sv_id}}">{{$s->sv_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="item form-group">
                    <label class="title-input">Khối lượng công việc</label>
                    <input type="text" name="aow" class="form-control" style="width: 30%">
                </div>
                <div class="item form-group">
                    <label class="title-input">Giá dịch vụ ứng với khối lượng công việc trên</label>
                    <input type="text" name="price" class="form-control" style="width: 30%">
                </div>
                <div class="item form-group">
                    <p class="title-input">Ghi chú về dịch vụ</p>
                    <textarea name="note" cols="50" rows="8"></textarea>
                </div>
                <div>
                    <button type="submit"  class="btn btn-primary">ADD</button>
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
@endsection

