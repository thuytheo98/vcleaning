@extends('admin.share.layout.master')

@section('title', 'Admin-User')

@section('content')
    <div class="title-file">Danh sách khách hàng</div>
    <!-- Search form -->
    <input class="form-control" type="text" placeholder="Search" aria-label="Search" style="width: 50%">
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
                        <button type="button" value="{{$user->id}}" class="editUser">Edit</button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <div id="ShowEditUser" style="display: none;">
        <div class="title-file">Chỉnh sửa thông tin khách hàng</div>
        <form action="" method="POST" id="form-update-user">
            @csrf
            <div class="item form-group">
                <div class="title-input">Họ và tên</div>
                <input type="text" name="name" id="nameUser" class="custom-input form-control" value="" required>
            </div>
            <div class="item form-group">
                <div class="title-input">Email</div>
                <input type="text" name="email" id="emailUser" class="custom-input form-control" value="" required>
            </div>
            <div class="item form-group">
                <div class="title-input">Phone</div>
                <input type="text" name="phone" id="phoneUser" class="custom-input form-control" value="" required>
            </div>
            <input type="text" name="id" value="" id="idUser" hidden>
            <div class="list-btn">
                <button type="reset" class="btn btn-dark">Trở lại</button>
                <button type="button" id="updateUser" class="btn btn-primary">Cập nhật</button>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                console.log('Cho di nhe');
            }
        });

        $('.editUser').click(function () {
            let id = $(this).attr('value');
            let position = $('.editUser').offset();
            let showUser = $.ajax({
                url:'ajax/user/edit/'+ id,
                type: 'get',
                data: {},
                dataType:'json',
                success: function (response) {
                    // console.log(response.email);
                    $('#ShowEditUser').css({
                        'display': 'block',
                        'position':'absolute',
                        'top': position.top,
                        'width':'500px',
                        'height':'400px',
                        'border':'1px solid black',
                        'background' : 'black',
                        'padding' : '20px',
                        'color' : 'white',
                    });
                    $('#nameUser').val(response.name);
                    $('#emailUser').val(response.email);
                    $('#phoneUser').val(response.phone);
                    $('#idUser').val(response.id);
                },
                error: function (xhr, status) {
                    alert("Sorry, there was a problem!");
                },
                complete: function (xhr, status) {

                }
            });
        });

        $('#updateUser').click(function () {
            let fr = $('#form-update-user');
            let name = fr.find('input[name="name"]').val();
            let email = fr.find('input[name="email"]').val();
            let phone = fr.find('input[name="phone"]').val();
            let id = fr.find('input[name="id"]').val();
            let url = 'ajax/user/update/'+ id;
            let type = fr.attr('method');
            let updateUser = $.ajax({
               url:url,
               type:type,
               data:{
                   name:name,
                   email:email,
                   phone:phone,
                   _token: '{{csrf_token()}}',
               },
                dataType:'json',
                success:function (response) {
                    window.location.href = "{{route('admin.users.index')}}";
                },
                error: function (xhr, status) {
                    alert("Sorry, there was a problem!");
                },
                complete: function (xhr, status) {

                }
            });
        });
    </script>
    @endsection
