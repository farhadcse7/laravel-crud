<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css"/>
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container">
            <a href="" class="navbar-brand">My Laravel App</a>
            <ul class="navbar-nav">
                <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
                <li><a href="{{ route('password') }}" class="nav-link">Password</a></li>
                <li><a href="{{ route('student.create') }}" class="nav-link">Add Student</a></li>
                <li><a href="{{ route('student.all') }}" class="nav-link">Manage Student</a></li>
                <li><a href="{{ route('product.create') }}" class="nav-link">Add Product</a></li>
                <li><a href="{{ route('product.all') }}" class="nav-link">Manage Product</a></li>
            </ul>
        </div>
    </nav>
    @yield('body')
    <script src="{{asset('/')}}js/bootstrap.bundle.js"></script>
</body>
</html>
