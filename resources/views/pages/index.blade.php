@extends('share.layout.master')

@section('title', 'Dịch vụ đặt giúp việc theo giờ')

@section('content')
<div class="wrapper row" style="">
    <div class="text-wrapper col-6">
        <div class="text-image-wrapper">
            <div class="text-image-content">
                <h1 class="text-image-title">
                    <span style="color:#858484;">Hãy để</span><br>
                    <span style="color:#80bdff;">cuộc sống của bạn</span><br>
                    <span style="color:#0062cc;">thảnh thơi hơn!</span>
                </h1>
                <p class="text-image-description">
                    vCleaning là công ty tiên phong ứng dụng nền tảng công nghệ vào ngành giúp việc gia đình ở Việt Nam,
                    cho phép bạn cùng người giúp việc chủ động đăng và nhận việc trực tiếp trên ứng dụng.
                </p>
            </div>
        </div>
    </div>
    <div class="image-wrapper col-6">
        <div class="image-box">
            <img src="{{asset('clientImages/giup-viec-thanh-thoi-bTaskee-header.jpg')}}" alt="">
        </div>
    </div>
</div>
<div class="text-across">
    <div class="text-across-content">
        <h2>_____Tại sao nên chọn vCleaning?</h2>
    </div>
</div>
<div class="reason row">
    <div class="image-reason col-6">
        <div class="image-box">
            <img src="{{asset('clientImages/why-choose-btaskee.jpg')}}" alt="">
        </div>
    </div>
    <div class="text-reason col-6">
        <div class="text-image-reason">
            <div class="text-image-content">
                <div class="text-image-item">
                    <h3 style="color:#80bdff;">Đặt lịch nhanh chóng</h3>
                    <p class="text-image-description">
                        Thao tác 60 giây trên ứng dụng, có ngay người nhận việc sau 60 phút
                    </p>
                </div>
                <div class="text-image-item">
                    <h3 style="color:#80bdff;">Giá cả rõ ràng</h3>
                    <p class="text-image-description">
                        Giá dịch vụ được hiển thị rõ ràng trên ứng dụng. Bạn không phải trả thêm bất kỳ khoản chi phí nào.
                    </p>
                </div>
                <div class="text-image-item">
                    <h3 style="color:#80bdff;">Đa dạng dịch vụ</h3>
                    <p class="text-image-description">
                        Bạn có thể đặt lịch dọn dẹp nhà bất cứ khi nào hoặc sử dụng. "Gói cố định" để đảm bảo luôn có người đến dọn dẹp nhà.
                    </p>
                </div>
                <div class="text-image-item">
                    <h3 style="color:#80bdff;">An toàn tối đa</h3>
                    <p class="text-image-description">
                        Đảm bảo quyền lợi khách hàng với gói Bảo hiểm dành riêng cho khách hàng lên đến 2 tỉ VND.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="text-across">
    <div class="text-across-content">
        <h2>_____Lựa chọn dịch vụ</h2>
    </div>
</div>
<div class="row">
    <div class="service-box col-3">
        <div class="service-box-content ">
            <div class="service-box-image">
                <img src="{{asset('clientImages/doi-tac-khu-khuan-btaskee.jpg')}}" alt="">
            </div>
            <div class="service-box-title">
                <h3>Khử khuẩn</h3>
                <p class="service-box-description">
                    Giúp việc nhà theo giờ làm theo khung giờ Khách hàng đăng ký khi phát sinh nhu cầu. Công việc gồm:
                    Dọn nhà, nấu ăn, rửa bát và hỗ trợ chăm sóc trẻ.
                </p>
            </div>
            <div class="btn-info-service"><a href="#">Đặt ngay</a></div>
        </div>
    </div>
    <div class="service-box col-3">
        <div class="service-box-content ">
            <div class="service-box-image">
                <img src="{{asset('clientImages/doi-tac-khu-khuan-btaskee.jpg')}}" alt="">
            </div>
            <div class="service-box-title">
                <h3>Khử khuẩn</h3>
                <p class="service-box-description">
                    Giúp việc nhà theo giờ làm theo khung giờ Khách hàng đăng ký khi phát sinh nhu cầu. Công việc gồm:
                    Dọn nhà, nấu ăn, rửa bát và hỗ trợ chăm sóc trẻ.
                </p>
            </div>
            <div class="btn-info-service"><a href="#">Đặt ngay</a></div>
        </div>
    </div>
</div>

<div class="support row" style="">
    <div class="text-support col-6">
        <div class="text-image-support">
            <div class="text-image-content">
                <h1 class="text-image-title">
                    Chúng tôi luôn sẵn sàng hỗ trợ bạn
                </h1>
                <p class="text-image-description">
                    Khi có bất kỳ thắc mắc gì về dịch vụ, bạn chỉ cần chạm nhẹ, chúng tôi sẽ giải đáp cho bạn
                </p>
            </div>
            <div class="btn-support"><a href="#">Trợ giúp ngay</a></div>
        </div>
    </div>
    <div class="image-support col-6">
        <div class="image-box">
            <img src="{{asset('clientImages/chon-bTaskee-cho-cuoc-song-thanh-thoi-Support.jpg')}}" alt="">
        </div>
    </div>
</div>
@endsection
