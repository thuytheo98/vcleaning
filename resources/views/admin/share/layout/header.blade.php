<div class="navbar">
    <div class="logo">
        <img src="" alt="">
        <span>VCleaning</span>
    </div>
    <div class="nav-right">
        <ul class="pull-right">
            <li>
                <a href="#">Thông báo<span class="badge">7</span></a>
            </li>
            <li>
                <a href="#">
                    <i class="">Tin nhắn</i>
                    <span class="badge">2</span>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown">
{{--                    <div class="employee-login">{{$data_user->username}}</div>--}}
                    <div class="employee-login">Thuys</div>
                </a>
                <ul class="dropdown-menu dropdown-menu-right">
{{--                    <li class="emp-role">{{$role}}</li>--}}
{{--                    <li class="emp-role">Admin</li>--}}
                    <li class="dropdown-item"><a href="#">Profile</a></li>
                    <li class="dropdown-item"><a href="{{route('admin.logout')}}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
