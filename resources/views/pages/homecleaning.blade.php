@extends('share.layout.master')
@section('title', 'Dọn dẹp nhà theo giờ')

@section("content")
    <div class="homecleaning container">
        <div class="text-input-service">
            <div class="text-input-container">
                <div class="text-input-content row">
                    <div class="text-input-title col-6">
                        <h3>Dịch vụ dọn dẹp nhà cửa</h3>
                        <p class="text-title">
                            Dịch vụ phun thuốc khử trùng, khử khuẩn với đội ngũ nhân viên kĩ thuật chuyên nghiệp,
                            được chọn lọc kỹ càng.

                            Phun thuốc khử trùng toàn diện, giúp khử khuẩn nhà cửa, văn phòng của bạn một cách kĩ càng.
                            Không khí, môi trường xung quanh bạn an toàn hơn trong thời điểm dịch bệnh hoành hành
                        </p>
                    </div>
                    <div class="text-input-custom col-6">
                        <div class="text-input-title">
                            <h5>Đăng ký nhận dịch vụ</h5>
                        </div>
                        <form action="{{route('user.service.homecleaning')}}" method="post" >
                            @csrf
                            <div class="form-group text-input">
                                <lable>Địa chỉ</lable>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group text-input">
                                <lable>Thời gian làm việc</lable>
                                <div class="text-input">
                                    <label>Chọn ngày làm</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="text-input">
                                    <label>Chọn giờ làm</label>
                                    <select name="time" id="" class="form-control">
                                        <option value="">Ca sáng</option>
                                        <option value="">Ca chiều</option>
                                        <option value="">Ca tối</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-input">
                                <lable>Khối lượng công viêc</lable>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group text-input">
                                <lable>Thêm dịch vụ đi kèm</lable>
{{--                                for 1 đống dịch vụ đi kèm vào --}}
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group text-input">
                                <lable>Lặp lại</lable>
                                <input type="checkbox">
                            </div>
                            <button id="" class="btn-dark">Đăng ký ngay</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-instruction-service">
            <div class="row">
                <div class="text-instruct-item col-3">
                    <div class="instruct-icon">
                        <i class=""></i>
                    </div>
                    <div class="instruct-text">
                        <div class="instruct-text-title">
                            <h3>Đặt lịch nhanh chóng</h3>
                        </div>
                        <div class="instruct-text-content">
                            <p>
                                Thao tác đơn giản, chỉ cần Điền form đăng kí, 60 giây có ngay kỹ thuật viên khử trùng
                                nhà cửa, văn phòng. Giúp bạn an toàn hơn trong mùa dịch.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-instruct-item col-3">
                    <div class="instruct-icon">
                        <i class=""></i>
                    </div>
                    <div class="instruct-text">
                        <div class="instruct-text-title">
                            <h3>Đặt lịch nhanh chóng</h3>
                        </div>
                        <div class="instruct-text-content">
                            <p>
                                Thao tác đơn giản, chỉ cần Điền form đăng kí, 60 giây có ngay kỹ thuật viên khử trùng
                                nhà cửa, văn phòng. Giúp bạn an toàn hơn trong mùa dịch.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-instruct-item col-3">
                    <div class="instruct-icon">
                        <i class=""></i>
                    </div>
                    <div class="instruct-text">
                        <div class="instruct-text-title">
                            <h3>Đặt lịch nhanh chóng</h3>
                        </div>
                        <div class="instruct-text-content">
                            <p>
                                Thao tác đơn giản, chỉ cần Điền form đăng kí, 60 giây có ngay kỹ thuật viên khử trùng
                                nhà cửa, văn phòng. Giúp bạn an toàn hơn trong mùa dịch.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text-instruct-item col-3">
                    <div class="instruct-icon">
                        <i class=""></i>
                    </div>
                    <div class="instruct-text">
                        <div class="instruct-text-title">
                            <h3>Đặt lịch nhanh chóng</h3>
                        </div>
                        <div class="instruct-text-content">
                            <p>
                                Thao tác đơn giản, chỉ cần Điền form đăng kí, 60 giây có ngay kỹ thuật viên khử trùng
                                nhà cửa, văn phòng. Giúp bạn an toàn hơn trong mùa dịch.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-image-about-service row">
            <div class="text-about col-6">
                <div class="text-about-title">
                    <h3>Dọn dẹp nhà cửa theo giờ</h3>
                </div>
                <div class="text-about-content">
                    <p>
                        Phun thuốc khử khuẩn toàn bộ không gian trong và ngoài nhà ở:
                        • Phun từ trần nhà xuống các vách tường, rồi đến nền nhà.
                        • Phun từ phòng ngủ, đến nhà vệ sinh, rồi đến các khu vực sinh hoạt chung như phòng khách, nhà bếp...
                        • Sau khi đã phun hết bên trong, tiến hành phun phần diện tích bên ngoài, các diện tích xung quanh căn nhà như: ban công, sân trước, sân sau, nhà để xe, sân vườn...
                    </p>
                </div>
            </div>
            <div class="image-about col-6">
                <div class="image">
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <div class="text-table-price">

        </div>
    </div>
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function () {
                console.log("Wait");
            }
        });
        $('')
    </script>
    @endsection
