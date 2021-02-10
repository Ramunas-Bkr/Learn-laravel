@extends('layouts.app')

@section('head-title'){{$data->subject}}@endsection

@section('content')
    <h1>{{$data->subject}}</h1>
        <div class="alert alert-info">
            <h5>{{ $data->name }}</h5>
            <h6>{{$data->email}}</h6>
            <p>{{$data->message}}</p>
            <p><small>{{$data->created_at}}</small></p>
            <a href="{{route('message-edit', $data->id)}}"><button class="btn btn-primary">Edit</button></a>
            <a href="{{route('message-delete', $data->id)}}"><button class="btn btn-danger">Delete</button></a>
        </div>
@endsection
