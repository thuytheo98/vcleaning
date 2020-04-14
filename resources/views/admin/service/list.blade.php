@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="service">
        <?php $i =1;
        ?>
        <h3>Danh sánh nhóm dịch vụ</h3>
        <div class="list-service">
            <select name="serviceName" id="serviceName" class="form-control" style="width: 30%">
                <option>----Chọn dịch vụ----</option>
                @foreach($services as $service)
                    <option class="idService" value="{{$service->sv_id}}">{{$service->sv_name}}</option>
                @endforeach
            </select>
            <p style="color: #e4606d">Chọn dịch vụ và xem chi tiết</p>
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>STT</th>
                    <th>Khối lượng công việc</th>
                    <th>Giá dịch vụ</th>
                    <th>Mô tả về dịch vụ</th>
                    <th>Dịch vụ kèm theo</th>
                    <th>Ghi chú của dịch vụ kèm theo</th>
                    <th>Chỉnh sửa</th>
                </tr>
            </table>
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
        $('#serviceName').change(function () {
            let id = $(this).find(':selected').val();
            let detailService = $.ajax({
               url: 'ajax/service/detailInfo/' + id,
               type: 'get',
               data: {},
               dataType: 'json',
               success: function (response) {
                   console.log(response);
               },
                error: function () {

                },
                complete: function () {

                }
            });
        });
    </script>
    @endsection
