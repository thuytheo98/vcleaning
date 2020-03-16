@extends('admin.share.layout.master')
@section('title', 'Vcers')

@section('content')
    <?php $i =0;
    ?>
    <div>
        <a href="{{route('admin.vcers.create')}}">Create vcer</a>
    </div>
    <div class="list-vcer">
        <table class="table table-dark table-hover" style="width: 70%;padding: 30px;">
            <tr>
                <th>Stt</th>
                <th>Name</th>
                <th>Identification</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Age</th>
                <th>Date</th>
                <th>Time</th>
                <th>Status</th>
                <th>oke</th>
            </tr>
            @foreach($listVcer as $vcer)
            <tr>
                <td><?php echo $i++?></td>
                <td>{{$vcer->name}}</td>
                <td>{{$vcer->identification}}</td>
                <td>{{$vcer->address}}</td>
                <td>{{$vcer->phone}}</td>
                <td>{{$vcer->age}}</td>
                <td>{{$vcer->date}}</td>
                <td>{{$vcer->time}}</td>
                <td>{{$vcer->status}}</td>
                <td><a href="{{route('admin.vcers.edit',$vcer->id)}}">Edit</a></td>
            </tr>
                @endforeach
        </table>
    </div>
@endsection
