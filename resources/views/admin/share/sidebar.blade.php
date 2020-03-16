<div class="sidebar">
    <div class="logo-cus">
        <img src="" alt="">
        <span>Tao là thúy quản lý ^^</span>
    </div>
    <div class="sidebar-nav">
        <ul class="main-menu">
            <li  class="active">
                <a href="">Dashboard</a>
            </li>
            <li>
                <a href="#">Quản lý hóa đơn</a>
            </li>
            <li>
                <a href="{{route('admin.services.index')}}">Quản lý dịch vụ</a>
            </li>
            <li>
                <a href="{{route('admin.vcers.index')}}">Quản lý vcer</a>
            </li>
            <li>
                <a href="index.php?page=service">Quản lý khách hàng</a>
            </li>
        </ul>
        <div class="widget">
            <a href="">
                <i class="fal fa-cogs"></i>
                <span class="text-sidebar">Setting</span>
            </a>
        </div>
        <div class="widget">
            <a href="{{route('admin.logout')}}">
                <i class="fas fa-sign-out-alt"></i>
                <span class="text-sidebar">Log out</span>
            </a>
        </div>
    </div>
</div>
