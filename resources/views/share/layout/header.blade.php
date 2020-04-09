<header>
    <nav class="navbar navbar-expand-sm navbar-light justify-content-center" style="padding: 15px; border-bottom: 1px solid #b9bbbe; font-size: 20spx;font-weight: 600" >
        <!-- Brand/logo -->
        <a class="navbar-brand" href="{{route('index')}}" style="margin: 0 50px; padding-right: 70px; font-size: 25px;">Vcleaning</a>
        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item" style="margin: 0 30px;">
                <a class="nav-link" href="{{route('about')}}">{{__('messages.header.about')}}</a>
            </li>
            <li class="nav-item" style="margin: 0 20px;">
                <a class="nav-link" href="{{route('usr.service.index')}}">{{__('messages.header.service')}}</a>
            </li>
            <li class="nav-item" style="margin: 0 20px;">
                <a class="nav-link" href="{{route('contact')}}" >{{__('messages.header.contact')}}</a>
            </li>
            <li class="nav-item active" style="margin: 0 20px;">
                <a class="nav-link" href="{{route('vcer')}}">{{__('messages.header.register')}}</a>
            </li>
            <li class="nav-item dropdown" style="margin: 0 20px;">
                <a href="#" class="nav-link" data-toggle="dropdown">{{__('messages.header.lang')}}</a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="{{ route('locale', 'en') }}">English</a></li>
                    <li class="dropdown-item"><a href="{{ route('locale', 'vi') }}">Tiếng Việt</a></li>
                </ul>
            </li>
            <li class="nav-item" style="margin: 0 20px;">
                <a class="nav-link {{\Auth::check()? 'oke' : ''}}" href="{{route('login')}}">{{trans_choice('messages.header.login', [Auth::user()])}}</a>
            </li>
        </ul>
    </nav>
</header>


