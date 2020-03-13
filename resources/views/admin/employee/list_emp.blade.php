@extends('admin.share.layout.master')
@section('content')
    <div class="list-employee">
        <div class="title-list">
            <div class="float-left">
                <div class="title">Danh sách nhân viên</div>
            </div>
            <div class="float-right">
                <a href="{{route('emp.employee.create')}}">Thêm nhân viên</a>
            </div>
        </div>
        <table class="table table-striped" style="width: 70%">
            <tr>
                <th>STT</th>
                <th>Họ Tên</th>
                <th>Địa chỉ</th>
                <th>Tuổi</th>
                <th>Số điện thoại</th>
                <th>Căn cước công dân</th>
                <th>Hành động</th>
            </tr>
            <?php $i = 0; ?>
            @foreach($listemp as $emp)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$emp->name}}</td>
                <td>{{$emp->address}}</td>
                <td>{{$emp->age}}</td>
                <td>{{$emp->phone}}</td>
                <td>{{$emp->identification}}</td>
                <td class="edit">
                    <a href="employee\{{$emp->id}}\edit"><i class="fa fa-edit">Edit</i></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
