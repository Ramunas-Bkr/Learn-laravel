@extends('layouts.app')

@section('head-title', 'Edit message')

@section('content')
    <h1>Edit message</h1>

    <form action="{{ route('message-edit-submit', $data->id) }}" method="POST" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" value="{{$data->name}}" name="name" id="name" placeholder="Enter your name" class="form-control col-6">
        </div>
        <div class="form-group">
            <label for="email">Enter your email</label>
            <input type="text" value="{{$data->email}}" name="email" id="email" placeholder="Enter your email" class="form-control col-6">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" value="{{$data->subject}}" name="subject" id="subject" placeholder="Subject" class="form-control col-6">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Enter your message" class="form-control col-8">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
@endsection
