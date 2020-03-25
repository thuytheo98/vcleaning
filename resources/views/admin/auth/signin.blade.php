<html>
<head>
    <title>{{env("APP_NAME")}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css-custom/admin/admin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/emp.css')}}" type="text/css">
</head>
<body>
<div class="login">
    <div class="logo-login">
        <img src="../image/logolev.png" alt="">
        <span>Vcleaning</span>
    </div>
    <div class="title">Chào mừng đến với hệ thống quản trị</div>
    <form action="{{route('admin.login')}}" method="POST">
        @csrf
        <div class="item">
            <div class="title-input">Tên đăng nhập:</div>
            <div class="container-input">
                <input type="text" placeholder="Username" class="input-custom" name="name" required>
            </div>
        </div>
        <div class="item">
            <div class="title-input">Mật khẩu:</div>
            <div class="container-input">
                <input type="password" placeholder="password" class="input-custom" name="password" required>
            </div>
        </div>
        <div class="btn-login">
            <button type="submit">Đăng nhập</button>
        </div>
    </form>
</div>
</body>
</html>
