<html>
<head>
    <title>{{env("APP_NAME")}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css-custom/listservice.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/admin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/client/header-client.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
@include('share.layout.header')
    <div class="container">
         @yield('content')
    </div>
@include('share.layout.footer')
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
