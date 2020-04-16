@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="service">
        <?php $i =1;
        ?>
        <h3>Danh sánh nhóm dịch vụ</h3>
        <div class="list-service">
            <select name="serviceName" id="serviceName" class="form-control" style="width: 30%">
                <option >----Chọn dịch vụ----</option>
                @foreach($services as $service)
                    <option value="{{$service->sv_id}}">{{$service->sv_name}}</option>
                @endforeach
            </select>
            <p style="color: #e4606d">Chọn dịch vụ và xem chi tiết</p>
            <table id="detailSub" class="table table-striped table-bordered table-hover">
                <tr>
                    <th>Khối lượng công việc</th>
                    <th>Giá dịch vụ</th>
                    <th>Mô tả về dịch vụ</th>
                    <th>Dịch vụ kèm theo</th>
                    <th>Nội dung dịch vụ kèm theo</th>
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

                   if(response.length === 0){
                       alert('Dịch vụ chưa có chi tiết!Thêm chi tiết vào dịch vụ');
                   }else{
                       for (var i = response.length - 1; i >= 0; i--) {
                           $('#detailSub tr:last').after(
                               '<tr>' +
                               '<td>'+response[i].amount_of_work+'</td>' +
                               '<td>'+response[i].price+'</td>' +
                               '<td>'+response[i].note+'</td>' +
                               '<td>'+response[i].name+'</td>' +
                               '<td>'+response[i].description+'</td>' +
                               '<td>'+response[i].price+'</td>' +
                               '<td><a href="#">Edit</a></td>' +
                               '</tr>'
                           );
                       }
                   }

               },
                error: function () {

                },
                complete: function () {

                }
            });
        });
    </script>
    @endsection
