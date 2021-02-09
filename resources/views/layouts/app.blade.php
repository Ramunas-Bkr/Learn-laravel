<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('head-title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">    
</head>
<body>
    @include('incl.header')
    @if(Request::is('/'))
        @include('incl.hero')
    @endif
    <div class="container mt-5">
        @include('incl.messages')
        <div class="row mt-3">
            <div class="col-10">
                @yield('content')
            </div>
            <div class="col-2">
                @include('incl.aside')
            </div>
        </div>
    </div>
    @include('incl.footer')
</body>
</html>