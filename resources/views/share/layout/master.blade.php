<html>
<head>
    <title>{{env("APP_NAME")}} - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css-custom/client/admin.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/client/index.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/client/footer.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/client/listservice.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css-custom/client/header-client.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
@include('share.layout.header')
    <div class="container">
         @yield('content')
    </div>
@include('share.layout.footer')
<script src="{{asset('js/app.js')}}"></script>
@yield('script')
</body>
</html>
