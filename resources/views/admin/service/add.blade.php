@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="row">
        <div class="add-service col-6">
            <h2 class="add-title">Thêm mới dịch vụ</h2>
            <form action="{{route('admin.services.store')}}" method="POST">
                @csrf
                <div class="">
                    <div class="add-service">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Service</div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label>Tên dịch vụ</label>
                                    <input type="text" id="sv_name" name="sv_name" class="form-control" style="width: 30%">
                                </div>
                                <div class="form-group">
                                    <p>Mô tả về dịch vụ</p>
                                    <textarea name="description" cols="50" rows="8"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="list-btn">
                        <button type="button" class="btn btn-dark btn-lg">Reset</button>
                    <button type="submit" class="btn btn-primary btn-lg">ADD</button>
                </div>
            </form>
        </div>
    </div>
@endsection
