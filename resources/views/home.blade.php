@extends('layouts.app')

@section('head-title', 'Main page')

@section('content')
    <h1>Main home page</h1>
    @section('aside')
        @parent
            <p>Additional text</p>
    @endsection
@endsection
