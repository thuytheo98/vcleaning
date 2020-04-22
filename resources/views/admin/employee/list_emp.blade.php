@extends('admin.share.layout.master')
@section('title', 'Employee')

@section('content')
    <div class="list-emp">
        <div class="title-file">
            <h3 style="margin-top: 20px;">Danh sách nhân viên</h3>
        </div>
        <div class="create-vcer">
            <a href="{{route('admin.employees.create')}}">Create employee</a>
        </div>
        <table class="table table-striped table-bordered table-hover" style="margin: 20px; width: 90%">
            <tr>
                <th>STT</th>
                <th>Họ Tên</th>
                <th>Địa chỉ</th>
                <th>Ngày sinh</th>
                <th>Giới tính</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Căn cước công dân</th>
                <th>Username</th>
                <th>Quyền cho phép</th>
                <th>Chỉnh sửa</th>
            </tr>
            <?php $i = 0; ?>
            @foreach($list_emp as $emp)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$emp->name}}</td>
                <td>{{$emp->address}}</td>
                <td>{{$emp->birthday}}</td>
                <td>{{($emp->gender =="1")? "Nữ" : "Nam"}} </td>
                <td>{{$emp->email}}</td>
                <td>{{$emp->phone}}</td>
                <td>{{$emp->identification}}</td>
                <td>{{$emp->username}}</td>
                <td>{{($emp->role =="1")? "Quản lý" : "Nhân viên"}}</td>
                <td class="edit">
                    <a href="{{route('admin.employees.edit', $emp->id)}}">Edit</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
