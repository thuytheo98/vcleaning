@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="add-service" style="margin-left: 20px;margin-top: 10px;">
        <h2 class="add-title" style="text-align: center">Thêm mới dịch vụ</h2>
        <form action="{{route('admin.services.store')}}" method="POST">
            @csrf
            <div class="row" style="margin-top: 20px;">
             <div class="add-service col-md-4">
               <div class="panel panel-primary">
                   <div class="panel-heading">Service</div>
                   <div class="panel-body">
                       <div class="form-group">
                           <label>Tên dịch vụ</label>
                           <input type="text" id="sv_name" name="sv_name" class="form-control" style="width: 30%">
                       </div>
                       <div class="form-group">
                           <p>Mô tả về dịch vụ</p>
                           <textarea name="description" cols="50" rows="8"></textarea>
                       </div>
                   </div>
               </div>
             </div>
           <div class="add-detail-service col-md-4">
               <div class="panel panel-primary">
                   <div class="panel-heading">Detail Service</div>
                   <div class="panel-body">
                       <div class="form-group">
                           <label>Khối lượng công việc</label>
                           <input type="text" name="aow" class="form-control" style="width: 30%">
                       </div>
                       <div class="form-group">
                           <label>Giá dịch vụ ứng với khối lượng công việc trên</label>
                           <input type="text" name="price" class="form-control" style="width: 30%">
                       </div>
                       <div class="form-group">
                           <p>Ghi chú về dịch vụ</p>
                           <textarea name="note" cols="50" rows="8"></textarea>
                       </div>
                   </div>
               </div>
           </div>
           <div class="add-sub-service col-md-4">
               <div class="panel panel-primary">
                   <div class="panel-heading">SubService</div>
                   <div class="panel-body">
                       <div class="item form-group">
                           <label class="title-input">Tên dịch vụ đi kèm</label>
                           <input type="text" name="sub_name" class="form-control" style="width: 30%">
                       </div>
                       <div class="item form-group">
                           <label class="title-input">Giá</label>
                           <input type="text" name="sub_price" class="form-control" style="width: 30%">
                       </div>
                       <div class="item form-group">
                           <p class="title-input">Mô tả về dịch vụ đi kèm theo</p>
                           <textarea name="sub_description" cols="40" rows="6"></textarea>
                       </div>
                    </div>
               </div>
           </div>
            </div>
            <div class="list-btn">
                <button type="button" class="btn btn-info btn-lg">Reset</button>
                <button type="submit" class="btn btn-primary btn-lg">ADD</button>
            </div>
        </form>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection
