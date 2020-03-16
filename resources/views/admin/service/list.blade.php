@extends('admin.share.layout.master')
@section('title', 'Services')

@section('content')
    <div class="list-service">
        <div class="add-service">
            <form action="{{route('admin.services.store')}}" method="POST">
                @csrf
            <h3>Thêm danh mục dịch vụ</h3>
            <div>
                <div>
                    <div><lable>Ten danh muc</lable></div>
                    <div><input type="text" name="sv_name"></div>
                </div>
                <div>
                    <div><lable>Mo ta</lable></div>
                    <div><textarea name="description" cols="30" rows="10"></textarea></div>
                </div>
                <div>
                    <button type="submit">ADD</button>
                </div>
            </div>
            </form>
        </div>
        <?php $i =0;
        ?>
        <div class="list-service">
            <table>
                <tr>
                    <th>STT</th>
                    <th>Ma dm</th>
                    <th>Ten dm</th>
                    <th>dm</th>
                </tr>
                @foreach($services as $service)
                <tr>
                    <td><?php echo $i++?></td>
                    <td>{{$service->sv_name}}</td>
                    <td>{{$service->description}}</td>
                    <td><a href="#">Edit</a></td>
                </tr>
                    @endforeach
            </table>
        </div>
    </div>
@endsection
