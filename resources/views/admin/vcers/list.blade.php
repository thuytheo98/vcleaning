@extends('admin.share.layout.master')
@section('title', 'Admin - Vcers')

@section('content')
    <?php $i = 1;
    ?>
    <div class="title-file">
        <h3 style="margin-top: 20px;">Danh sách nhân viên Vcer</h3>
    </div>
    <div class="create-vcer">
        <a href="{{route('admin.vcers.create')}}">Create vcer</a>
    </div>
    <div class="list-vcer">
        <table class="table table-striped table-bordered table-hover" style="width: 100%;">
            <tr>
                <th>Stt</th>
                <th>Họ và tên</th>
                <th>Căn cước công dân</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Tuổi</th>
                <th>Ngày có thể làm</th>
                <th>Thời điểm có thể làm</th>
                <th>Tình trạng cvc trước đây</th>
                <th>Chỉnh sửa</th>
            </tr>
            @foreach($listVcer as $vcer)
            <tr>
                <td><?php echo $i++?></td>
                <td>{{$vcer->vcer_name}}</td>
                <td>{{$vcer->vcer_identification}}</td>
                <td>{{$vcer->vcer_address}}</td>
                <td>{{$vcer->vcer_phone}}</td>
                <td>{{$vcer->vcer_age}}</td>
                <td>{{$vcer->vcer_date}}</td>
                <td>{{$vcer->vcer_time}}</td>
                <td>{{$vcer->vcer_experience}}</td>
                <td><a href="{{route('admin.vcers.edit',$vcer->vcer_id)}}">Edit</a></td>
            </tr>
                @endforeach
        </table>
    </div>
@endsection
