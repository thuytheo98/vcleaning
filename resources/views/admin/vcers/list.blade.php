@extends('admin.share.layout.master')
@section('title', 'Vcers')

@section('content')
    <?php $i = 1;
    ?>
    <div class="title-file">
        <h3>Danh sách nhân viên Vcer</h3>
    </div>
    <div class="create-vcer">
        <a href="{{route('admin.vcers.create')}}">Create vcer</a>
    </div>
    <div class="list-vcer">
        <table class="table table-bordered table-hover" style="width: 70%;">
            <tr>
                <th>Stt</th>
                <th>Họ và tên</th>
                <th>Căn cước công dân</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Tuổi</th>
                <th>Ngày có thể làm</th>
                <th>Thời điểm có thể làm</th>
                <th>Tình trạng cvc</th>
                <th>Chỉnh sửa</th>
            </tr>
            @foreach($listVcer as $vcer)
            <tr>
                <td><?php echo $i++?></td>
                <td>{{$vcer->name}}</td>
                <td>{{$vcer->identification}}</td>
                <td>{{$vcer->address}}</td>
                <td>{{$vcer->phone}}</td>
                <td>{{$vcer->age}}</td>
                <td>{{$vcer->date}}</td>
                <td>{{$vcer->time}}</td>
                <td>{{$vcer->status}}</td>
                <td><a href="{{route('admin.vcers.edit',$vcer->id)}}">Edit</a></td>
            </tr>
                @endforeach
        </table>
    </div>
@endsection
