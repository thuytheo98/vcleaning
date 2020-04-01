@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="add-sub-service">
        <form action="{{route("admin.subservice.store")}}" method="POST">
            @csrf
            <h3>Thêm dịch vụ đi kèm</h3>
            <div>
                <div class="item form-group">
                    <label class="title-input">Tên dịch vụ</label>
                        <select name="service" id="sv_name" class="form-control" style="width: 30%">
                            @foreach($service as $sv)
                                <option value="{{$sv->sv_id}}">{{$sv->sv_name}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="item form-group">
                    <label class="title-input">Khối lượng công việc</label>
                    <select name="detail_service" id="KLg" class="form-control" style="width: 30%">
                        @foreach($detailsv as $detail)
                            <option value="{{$detail->id}}">{{$detail->amount_of_work}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="item form-group">
                    <label class="title-input">Giá dịch vụ ứng với khối lượng công việc trên</label>
                        <input type="text" name="sub_name" class="form-control" style="width: 30%" value="{{$detail->price}}">
                </div>
                <div class="item form-group">
                    <label class="title-input">Tên dịch vụ đi kèm</label>
                    <input type="text" name="sub_name" class="form-control" style="width: 30%">
                </div>
                <div class="item form-group">
                    <label class="title-input">Giá</label>
                    <input type="text" name="price" class="form-control" style="width: 30%">
                </div>
                <div class="item form-group">
                    <p class="title-input">Mô tả về dịch vụ đi kèm theo</p>
                    <textarea name="description" cols="70" rows="12"></textarea>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary btn-lg">ADD</button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery(document).ready(function () {
            $("#sv_name").change(function () {
                var idService = $(this).val();
                console.log(idService);
                let getId = $.ajax({

                });
                // $.get( + idService, function (data){
                //     console.log("oke");
                //     $("#KLg").html(data);
                // });
            })
        })
    </script>
 @endsection
