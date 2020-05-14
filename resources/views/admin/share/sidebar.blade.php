<div class="sidebar">
    <div class="text-image-employee">
        <div class="image">
            <img src="#" alt="">
        </div>
        <div class="text-info">
            <p class="text-info-name">Hi! My name is {{Auth::guard("employees")->user()->emp_name}}</p>
            <p class="text-info-name"> {{(Auth::guard("employees")->user()->emp_role) == '2'?'Nhân viên' : 'Quản lý'}}</p>
            <i class="fa fa-circle text-success"></i>
            Online
        </div>
    </div>
    <div class="sidebar-nav">
        <ul class="main-menu">
            <li class="{{(strpos(\Route::currentRouteName(), 'admin.home') !== false)? 'active' : ''}}">
                <a href="{{route('admin.home.index')}}">Dashboard</a>
            </li>
            <li class="{{(strpos(\Route::currentRouteName(), 'admin.orders') !== false)? 'active' : ''}}">
                <a href="{{route('admin.orders.index')}}">Quản lý Hóa Đơn</a>
            </li>
            <li class="{{(strpos(\Route::currentRouteName(), 'admin.vcers') !== false)? 'active' : ''}}">
                <a href="{{route('admin.vcers.index')}}">Quản lý Vcer</a>
            </li>

{{--            @if(Auth::guard("employees")->user()->emp_role == '1')--}}
                <li class="{{(strpos(\Route::currentRouteName(), 'admin.employees') !== false)? 'active' : ''}}">
                    <a href="{{route('admin.employees.index')}}">
                        <span class="text-sidebar">Quản lý Nhân Viên</span>
                    </a>
                </li>
{{--            @endif--}}

            <li class="{{(strpos(\Route::currentRouteName(), 'admin.services') !== false)? 'active' : ''}}">
                <a href="{{route('admin.services.index')}}">
                    <span class="text-sidebar">Quản lý Dịch Vụ</span>
                </a>
{{--                <ul id="menu-service" class="collapse">--}}
{{--                    <li><a href="">Danh sách Dịch Vụ</a></li>--}}
{{--                    <li><a href="{{route('admin.services.create')}}">Thêm mới dịch vụ</a></li>--}}
{{--                    <li><a href="{{route('admin.detail.create')}}">Thêm chi tiết dịch vụ đã có</a></li>--}}
{{--                    <li><a href="{{route('admin.subservice.create')}}">Thêm dịch vụ kèm theo</a></li>--}}
{{--                </ul>--}}
            </li>
            <li class="{{(strpos(\Route::currentRouteName(), 'admin.users') !== false)? 'active' : ''}}" >
                <a href="{{route('admin.users.index')}}">Quản lý Khách Hàng</a>
            </li>
        </ul>
        <div class="text-setting">
            <a href="">
                <i class="fal fa-cogs"></i>
                <span class="text-sidebar">Setting</span>
            </a>
        </div>
    </div>
</div>
