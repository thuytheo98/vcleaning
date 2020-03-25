@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="service">
        <?php $i =1;
        ?>
        <h3>Danh sánh nhóm dịch vụ</h3>
        <div class="list-service">
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>STT</th>
                    <th>Tên nhóm dịch vụ</th>
                    <th>Mô tả về dịch vụ</th>
                    <th>Chỉnh sửa</th>
                </tr>
                @foreach($services as $service)
                <tr>
                    <td><?php echo $i++?></td>
                    <td>{{$service->sv_name}}</td>
                    <td>{{$service->description}}</td>
                    <td><a href="#">Edit</a></td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
