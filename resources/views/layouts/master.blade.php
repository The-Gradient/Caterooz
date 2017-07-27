<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">
<link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
    @yield('styles')
</head>
<body>
@include('partials.header')
<div class="container">
    @yield('content')
</div>

<script   src="{{asset('js/jquery-3.2.1.min.js')}}"</script>
<script src="{{asset('js/bootstrap.min.js')}}"</script>
@yield('scripts')
</body>
</html> 