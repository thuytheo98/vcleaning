@extends('admin.share.layout.master')
@section('content')
    <div class="list-emp">
        <div class="title-file">
            <h3 style="margin-top: 20px;">Danh sách hóa đơn</h3>
        </div>
        <table class="table table-striped table-bordered table-hover" style="margin: 0 20px; width: 90%">
            <tr>
                <th>STT</th>
                <th>Địa chỉ</th>
                <th>Thời gian bắt đầu làm việc</th>
                <th>Thời gian kết thúc làm việc</th>
                <th>Khối lượng công việc</th>
                <th>Lặp lại</th>
                <th>Dịch vụ đi kèm</th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Tên nhân viên</th>
                <th>vcer</th>
                <th>Tổng tiền</th>
                <th>Phương thức thanh toán</th>
                <th>Trạng thái</th>
                <th>Xác nhận</th>
            </tr>
            <?php $i = 0; ?>

        </table>
    </div>
@endsection
