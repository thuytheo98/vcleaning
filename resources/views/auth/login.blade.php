@extends('share.layout.master')
@section('content')
{{--    <div>--}}
{{--        <form action="{{route('login')}}" method="POST">--}}
{{--            @csrf--}}
{{--            <div>--}}
{{--                <lable>Username</lable><input type="text" name="name">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <lable>Password</lable><input type="password" name="password">--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <button type="submit">Login</button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
    <div class="login">
        <div class="logo-login">
            <img src="../../image/logolev.png" alt="">
            <span>Vcleaning</span>
        </div>
        <div class="title">Chào mừng đến với hệ thống quản trị</div>
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="item">
                <div class="title-input">Tên đăng nhập:</div>
                <div class="container-input">
                    <input type="text" class="input-custom" name="name" required>
                </div>
            </div>
            <div class="item">
                <div class="title-input">Mật khẩu:</div>
                <div class="container-input">
                    <input type="password" class="input-custom" name="password" required>
                </div>
            </div>
            <div class="btn-login">
                <button type="submit">Đăng nhập</button>
            </div>
        </form>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @endsection

