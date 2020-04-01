@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="service">
        <?php $i =1;
        ?>
        <h3>Danh sánh nhóm dịch vụ</h3>
        <div class="list-service">
            <select name="service_name" class="form-control" style="width: 30%">
                @foreach($services as $service)
                    <option value="{{$service->sv_id}}">{{$service->sv_name}}</option>
                @endforeach
            </select>
            <p style="color: #e4606d">Chọn dịch vụ và xem chi tiết</p>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>STT</th>
                    <th>Khối lượng công việc</th>
                    <th>Giá dịch vụ</th>
                    <th>Mô tả về dịch vụ</th>
                    <th>Dịch vụ kèm theo</th>
                    <th>Ghi chú của dịch vụ kèm theo</th>
                    <th>Chỉnh sửa</th>
                </tr>
{{--                @foreach($services as $service)--}}
                    <td>STT</td>
                    <td>Khối lượng công việc</td>
                    <td>Giá dịch vụ</td>
                    <td>Mô tả về dịch vụ</td>
                    <td>Dịch vụ kèm theo</td>
                    <td>Ghi chú của dịch vụ kèm theo</td>
                    <td class="edit">
                        <a href="">Edit</a>
                    </td>
{{--                @endforeach--}}
            </table>
        </div>
    </div>
@endsection
