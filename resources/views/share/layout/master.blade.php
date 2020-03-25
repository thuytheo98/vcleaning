<html>
<head>
    <title>{{env("APP_NAME")}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css-custom/listservice.css-custom')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/admin.css-custom')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/header-client.css-custom')}}" type="text/css">
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
