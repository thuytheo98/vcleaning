<html>
<head>
    <title>{{env("APP_NAME")}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/emp.css')}}" type="text/css">
</head>
<body>
    @include('admin.share.layout.header')
    <div class="content">
        @include('admin.share.layout.sidebar')
            <div class="main">
                @yield('content')
            </div>
    </div>
</body>
</html>
