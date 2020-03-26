@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="add-service">

        <h2 class="add-title">Thêm mới dịch vụ</h2>

        <form action="{{route('admin.services.store')}}" method="POST">
            @csrf
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active_service active" data-toggle="tab" href="#service" id="add_service" style="border: 1px solid #ccc;">Thêm dịch vụ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link inactive_service" href="" id="add_detail_service" style="border: 1px solid #ccc;">Thêm chi tiết dịch vụ</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div id="service" class="tab-pane active"><br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Service</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Tên dịch vụ</label>
                                <input type="text" id="sv_name" name="sv_name" class="form-control" style="width: 30%">
                                <span id="error_sv_name" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Mô tả về dịch vụ</label>
                                <textarea name="description" cols="50" rows="8"></textarea>
                                <span id="error_sv_name" class="text-danger"></span>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary btn-lg" name="btn_add_service" id="btn_add_service">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="detail_service">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Detail Service</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Khối lượng công việc</label>
                                <input type="text" name="aow" class="form-control" style="width: 30%">
                            </div>
                            <div class="form-group">
                                <label>Giá dịch vụ ứng với khối lượng công việc trên</label>
                                <input type="text" name="price" class="form-control" style="width: 30%">
                            </div>
                            <div class="form-group">
                                <label>Ghi chú về dịch vụ</label>
                                <textarea name="note" cols="50" rows="8"></textarea>
                            </div>
                            <div>
                                <button type="button" name="previous_btn_detail_service" id="previous_btn_detail_service"  class="btn btn-info btn-lg">Previous</button>
                                <button type="submit"  name="btn_detail_service" id="btn_detail_service"  class="btn btn-primary btn-lg">ADD</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            $('#btn_add_service').click(function () {
                $('#add_service').removeClass('active active_service');
                $('#add_service').removeAttr('href data-toggle');
                $('#service').removeClass('active');
                $('#add_service').addClass('inactive_service');
                $('#add_detail_service').removeClass('inactive_service');
                $('#add_detail_service').addClass('active active_service');
                $('#add_detail_service').attr('href', 'detail_service');
                $('#add_detail_service').attr('data-toggle', 'tab');
                $('#detail_service').removeClass('fade');
                $('#detail_service').addClass('active');
            });
            $('#previous_btn_detail_service').click(function () {
                $('#add_detail_service').removeClass('active active_service');
                $('#add_detail_service').removeAttr('href', 'detail_service');
                $('#add_detail_service').removeAttr('data-toggle', 'tab');
                $('#detail_service').removeClass('active ');
                $('#detail_service').addClass('inactive_service');
                $('#add_service').removeClass('inactive_service');
                $('#add_service').addClass('active active_service');
                $('#service').addClass('active');
                $('#add_service').removeClass('inactive_service');
            })
        });
    </script>
@endsection
