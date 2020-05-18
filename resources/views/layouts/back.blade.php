<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" text="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet/less" type="text/css" href="{{ asset('less/styles.less') }}" />

    @yield('stylesheets')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Admin Panel')</title>
</head>
<body>
<div class="container">


    <div class="header">
        <a href="#" id="menu-action">
            <i class="fa fa-bars"></i>
            <span>Close</span>
        </a>
        <div class="logo">
            Admin Panel
        </div>
    </div>
    <div class="sidebar">
        <ul>
            <li><a href="/" target="_blank"><i class="fa fa-home"></i><span>Veiw Front Page</span></a></li>
            <li><a href="/admin"><i class="fa fa-desktop"></i><span>Dashboard</span></a></li>
            <li><a href="{{route('posts.index')}}"><i class="fa fa-pencil-square-o"></i><span>Posts</span></a></li>
            <li><a href="{{route('tags.index')}}"><i class="fa fa-hashtag"></i><span>Tags</span></a></li>
            <li><a href="#"><i class="fa fa-envelope-o"></i><span>Messages</span></a></li>
            <li><a href="#"><i class="fa fa-table"></i><span>Data Table</span></a></li>
        </ul>
    </div>


    <!-- Content -->
    <div class="main">
        <div class="">
            @yield('content')
        </div>
    </div>

</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
@yield('scripts')
</body>
</html>











