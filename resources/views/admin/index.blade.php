@extends('admin.share.layout.master')

@section('title', 'Admin')

@section('content')
    <?{{ document.get_called_class() }}?>
    @endsection
