@extends('share.layout.master')
@section('title', 'Đăng nhập tài khoản')

@section('content')
    <i>Trang chủ/Đăng nhập</i>
    <div class="row">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">{{__("messages.LoginPage.email")}}</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter username" name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">{{__('messages.LoginPage.password')}}</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div>
                <p>Chưa có tài khoản?<a href="">Đăng ký ngay</a></p>
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

