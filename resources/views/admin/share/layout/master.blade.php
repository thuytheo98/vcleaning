<html>
<head>
    <title>{{env("APP_NAME")}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/emp.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/admin/vcer.css')}}" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
@include('admin.share.layout.header')
<div class="content">
    @include('admin.share.sidebar')
    <div class="main">
        @yield('content')
    </div>
</div>
</body>
</html>
