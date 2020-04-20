@extends('share.layout.master')
@section('title', 'Chọn dịch vụ')

@section("content")
<div class="choose-service">
    <h3>Chọn dịch vụ</h3>
    <div class="services">
        @foreach($listsv as $getname)
            <a class="choose-item item-giatui" href="{{route('user.service.homecleaning')}}">
                <div class="icon-circle">
                    <i class="fas fa-air-conditioner"></i>
                    <h5>{{$getname->sv_name}}</h5>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
