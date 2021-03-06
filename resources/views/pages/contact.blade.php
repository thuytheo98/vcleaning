@extends('share.layout.master')
@section('title', 'Liên hệ')

@section('content')
    <div class="contact">
        <div class="text-input-contact">
            <div class="text-title">
                <h3>Liên hệ và phản hồi cho vCleaning</h3>
            </div>
            <div class="text-input-container">
                <form action="">
                    <div class="row">
                        <div class="text-input-content col-7">
                            <p>Gửi phản hồi</p>
                            <div class="text-input-item form-group">
                                <label>Họ và tên</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="text-input-item form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="text-input-item form-group">
                                <label>Nội dung</label>
                                <input type="text" class="form-control">
                            </div>
                            <button class="btn-support">Gửi</button>
                        </div>
                        <div class="text-info-contact">
                            <p>Liên hệ</p>
                            <div class="info-item">
                                <label>Email</label>
                                <p>support@vcleaning.com</p>
                            </div>
                            <div class="info-item">
                                <label>Hotline</label>
                                <p>123.456.789</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="information">
            <h2 class="no-margin-top">Welcome!</h2>
            <p>Company is a technology company specialising in tech reviews.</p>
            <p>We’re very good at what we do, but unfortunately, we are not a real company.</p>
            <p>Make sure you visit makeuseof.com for the full tutorial on how to build this website.</p>
            <p>Alternatively, check out our review of the Panasonic G80 shown on the right!</p>
            <p>Email:gsgfhfdggfgdg1243@gmail.com</p>
            <p>Contact us:0123456789</p>
        </div>
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.113490793524!2d105.80130561488333!3d21.028144485998666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab424a50fff9%3A0xbe3a7f3670c0a45f!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBHaWFvIHRow7RuZyBW4bqtbiB04bqjaSAoVVRDKQ!5e0!3m2!1svi!2s!4v1572485317780!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
@endsection
