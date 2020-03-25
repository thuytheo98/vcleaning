<html>
<head>
    <title>{{env("APP_NAME")}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css-custom/admin/admin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/admin/service.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/admin/vcer.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/admin/emp.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
@include('admin.share.layout.header')
<div class="content">
    @include('admin.share.sidebar')
    <div class="main">
        @yield('content')
    </div>
</div>
@yield('script')
<script src="{{asset('/js/app.js')}}"></script>
</body>
</html>
