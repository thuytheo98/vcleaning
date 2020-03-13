@extends('share.layout.master')
@section("content")
<div class="choose-service">
    <h3>Chọn dịch vụ</h3>
    <div class="services">
        @foreach($listsv as $getname)
            <a class="choose-item item-giatui">
                <div class="icon-circle">
                    <i class="fas fa-air-conditioner"></i>
                    <h5>{{$getname->sv_name}}</h5>
                </div>
            </a>
        @endforeach
    </div>
    <script type="text/javascript">

    </script>
</div>
@endsection
