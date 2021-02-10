@extends('layouts.app')

@section('head-title', 'All messages')

@section('content')
    <h1>All messages</h1>
    @foreach ( $data as $element)
        <div class="alert alert-info">
            <h5>{{ $element->subject }}</h5>
            <h6>{{$element->name}}</h6>
            <p>{{$element->email}}</p>
            <p><small>{{$element->created_at}}</small></p>
            <a href="{{route('one-message', $element->id)}}"><button class="btn btn-warning">Details</button></a>
        </div>
    @endforeach
@endsection
