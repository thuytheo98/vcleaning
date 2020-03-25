@extends('admin.share.layout.master')
@section('content')
    <div class="title-file">Danh sách khách hàng</div>
    <div class="list-user">
        <table class="table table-striped table-bordered table-hover" style="margin: 30px auto;width: 70%">
            <tr>
                <th>STT</th>
                <th>Họ Tên</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Edit</th>
            </tr>
            <?php $i = 0; ?>
            @foreach($list_user as $user)
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td class="edit">
                        <a href="">Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
