@extends('share.layout.master')
@section('content')
    <div class="row">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">{{__("messages.LoginPage.username")}}</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                       placeholder="Enter username" name="username">
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

