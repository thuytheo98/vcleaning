<div class="sidebar">
    <div class="logo-cus">
        <img src="" alt="">
        <span>Tao là thúy quản lý ^^</span>
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
            <li class="{{(strpos(\Route::currentRouteName(), 'admin.employees') !== false)? 'active' : ''}}">
                <a href="#menu-emp" data-toggle="collapse">
                    <span class="text-sidebar">Quản lý Nhân Viên</span>
                </a>
                <ul id="menu-emp" class="collapse">
                    <li><a href="{{route('admin.employees.index')}}">Danh sách Nhân Viên</a></li>
                    <li><a href="{{route('admin.employees.create')}}">Thêm nhân viên</a></li>
                </ul>
            </li>
            <li class="{{(strpos(\Route::currentRouteName(), 'admin.services') !== false)? 'active' : ''}}">
                <a href="#menu-service" data-toggle="collapse">
                    <span class="text-sidebar">Quản lý Dịch Vụ</span>
                </a>
                <ul id="menu-service" class="collapse">
                    <li><a href="{{route('admin.services.index')}}">Danh sách Dịch Vụ</a></li>
                    <li><a href="{{route('admin.services.create')}}">Thêm mới dịch vụ</a></li>
                    <li><a href="{{route('admin.detail.create')}}">Thêm chi tiết dịch vụ đã có</a></li>
                    <li><a href="{{route('admin.subservice.create')}}">Thêm dịch vụ kèm theo</a></li>
                </ul>
            </li>
            <li class="{{(strpos(\Route::currentRouteName(), 'admin.users') !== false)? 'active' : ''}}" >
                <a href="{{route('admin.users.index')}}">Quản lý Khách Hàng</a>
            </li>
        </ul>
        <div class="widget">
            <a href="">
                <i class="fal fa-cogs"></i>
                <span class="text-sidebar">Setting</span>
            </a>
        </div>
    </div>
</div>
