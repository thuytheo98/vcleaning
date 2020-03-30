@extends('share.layout.master')
@section('title', 'Đăng nhập tài khoản')

@section('content')
    <p style="margin-top: 10px;"><i>Trang chủ/Đăng nhập</i></p>
    <div class="row login">
        <div class="container">
            <div class="content">
                <div class="title">
                    <h3>{{__("messages.LoginPage.title")}}</h3>
                </div>
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class=" input-custom form-group">
                        <label>{{__("messages.LoginPage.email")}}</label>
                        <input type="text" class="form-control" id="InputEmail1" placeholder="Enter username" name="email">
                    </div>
                    <div class="input-custom form-group">
                        <label>{{__('messages.LoginPage.password')}}</label>
                        <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">{{__('messages.LoginPage.button')}}</button>
                    <a href="" class="forget">{{__("messages.LoginPage.quespass")}}</a>
                    <div class="register-link">
                        <p>{{__('messages.LoginPage.account')}}<a href="">{{__('messages.LoginPage.register')}}</a></p>
                    </div>
                </form>
            </div>
        </div>
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

