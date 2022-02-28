<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel = "stylesheet" href="{{asset('/')}}css/bootstrap.css"/>
    <link rel = "stylesheet" href="{{asset('/')}}css/all.css"/>
    <link rel = "stylesheet" href="{{asset('/')}}css/style.css"/>
    <style>


    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-info">
        <div class="container">
            <a href="" class="navbar-brand">LOGO</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Add Student</a> </li>
                <li><a href="{{route('manage-student')}}" class="nav-link">Mangage Student</a> </li>
                <li><a href="{{route('add-blog')}}" class="nav-link">Add Blog</a> </li>
                <li><a href="{{route('manage-blog')}}" class="nav-link">All Blog</a> </li>
                <li><a href="{{route('add-product')}}" class="nav-link">Add Product</a> </li>
                <li><a href="{{route('manage-product')}}" class="nav-link">Manage Product</a> </li>
                <li><a href="" class="nav-link">Login</a> </li>
            </ul>
        </div>
    </nav>
    @yield('body')


    <script src ="{{asset('/')}}jquery-3.6.0.js"></script>
    <script src ="{{asset('/')}}bootstrap.js"></script>
</body>
</html>
