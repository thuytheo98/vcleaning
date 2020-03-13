<html>
<head>
    <title>{{env("APP_NAME")}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/listservice.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/header-client.css')}}" type="text/css">
</head>
<body>
{{--    @include('share.layout.header')--}}
    <div class="content">
            <div class="main">
                @yield('content')
            </div>
    </div>
</body>
</html>
