@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
        <div class="add-service">
{{--            <form action="{{route('admin.services.store')}}" method="POST">--}}
{{--                @csrf--}}
                <h3>Thêm danh mục dịch vụ</h3>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home">Thêm dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">Thêm chi tiết dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">Thêm dịch vụ kèm theo</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <form action="{{route('admin.services.store')}}" method="POST">
                                @csrf
                            <div class="item form-group">
                                <p class="title-input">Tên dịch vụ</p>
                                <input type="text" name="sv_name" class="form-control" style="width: 30%">
                            </div>
                            <div class="item form-group">
                                <p class="title-input">Mô tả về dịch vụ</p>
                                <textarea name="description" cols="50" rows="8"></textarea>
                            </div>
                            <div>
                                <button type="submit"  class="btn btn-primary">Quay lại</button>
                                <button type="submit" class="btn btn-primary">Thêm</button>
                            </div>
                        </form>
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                        <form action="{{route('admin.detail.store')}}" method="POST">
                            @csrf
                            <div class="item form-group">
                                <label class="title-input">Tên dịch vụ</label>
                                <select name="service" class="form-control" style="width: 30%">
    {{--                                @foreach($sv as $s)--}}
    {{--                                    <option value="{{$s->sv_id}}">{{$s->sv_name}}</option>--}}
    {{--                                @endforeach--}}
                                </select>
                            </div>
                            <div class="item form-group">
                                <label class="title-input">Khối lượng công việc</label>
                                <input type="text" name="aow" class="form-control" style="width: 30%">
                            </div>
                            <div class="item form-group">
                                <label class="title-input">Giá dịch vụ ứng với khối lượng công việc trên</label>
                                <input type="text" name="price" class="form-control" style="width: 30%">
                            </div>
                            <div class="item form-group">
                                <p class="title-input">Ghi chú về dịch vụ</p>
                                <textarea name="note" cols="50" rows="8"></textarea>
                            </div>
                            <div>
                                <button type="submit"  class="btn btn-primary">ADD</button>
                            </div>
                        </form>
                    </div>
                    <div id="menu2" class="container tab-pane fade"><br>
                        <div class="item form-group">
                            <label class="title-input">Tên dịch vụ</label>
                            <select name="service" id="sv_name" class="form-control" style="width: 30%">
{{--                                @foreach($service as $sv)--}}
{{--                                    <option value="{{$sv->sv_id}}">{{$sv->sv_name}}</option>--}}
{{--                                @endforeach--}}
                            </select>
                        </div>
                        <div class="item form-group">
                            <label class="title-input">Khối lượng công việc</label>
                            <select name="detail_service" id="KLg" class="form-control" style="width: 30%">
{{--                                @foreach($detailsv as $detail)--}}
{{--                                    <option value="{{$detail->id}}">{{$detail->amount_of_work}}</option>--}}
{{--                                @endforeach--}}
                            </select>
                        </div>
                        {{--                <div class="item form-group">--}}
                        {{--                    <label class="title-input">Giá dịch vụ ứng với khối lượng công việc trên</label>--}}
                        {{--                        <input type="text" name="sub_name" class="form-control" style="width: 30%" value="{{$detail->price}}">--}}
                        {{--                </div>--}}
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
                            <button type="submit" class="btn btn-primary">ADD</button>
                        </div>
                    </div>
                </div>



{{--                <div>--}}
{{--                    <div class="item form-group">--}}
{{--                        <p class="title-input">Tên dịch vụ</p>--}}
{{--                        <input type="text" name="sv_name" class="form-control" style="width: 30%">--}}
{{--                    </div>--}}
{{--                    <div class="item form-group">--}}
{{--                        <p class="title-input">Mô tả về dịch vụ</p>--}}
{{--                        <textarea name="description" cols="50" rows="8"></textarea>--}}
{{--                    </div>--}}
{{--                    <div class="item form-group">--}}
{{--                        <label class="title-input">Khối lượng công việc</label>--}}
{{--                        <input type="text" name="aow" class="form-control" style="width: 30%">--}}
{{--                    </div>--}}
{{--                    <div class="item form-group">--}}
{{--                        <label class="title-input">Giá dịch vụ ứng với khối lượng công việc trên</label>--}}
{{--                        <input type="text" name="price" class="form-control" style="width: 30%">--}}
{{--                    </div>--}}
{{--                    <div class="item form-group">--}}
{{--                        <p class="title-input">Ghi chú về dịch vụ</p>--}}
{{--                        <textarea name="note" cols="50" rows="8"></textarea>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <button type="submit"  class="btn btn-primary">Quay lại</button>--}}
{{--                        <button type="submit" class="btn btn-primary">Thêm</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
    </div>
@endsection
