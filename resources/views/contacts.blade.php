@extends('layouts.app')

@section('head-title', 'Contacts')

@section('content')
    <h1>Contacts page</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts-form') }}" method="POST" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="name">Enter your name</label>
            <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control col-6">
        </div>
        <div class="form-group">
            <label for="email">Enter your email</label>
            <input type="text" name="email" id="email" placeholder="Enter your email" class="form-control col-6">
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control col-6">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Enter your message" class="form-control col-8"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
