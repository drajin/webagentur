<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" text="text/css" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet/less" type="text/css" href="{{ asset('less/styles.less') }}" />

    @yield('stylesheets')

    <script src="https://kit.fontawesome.com/1b23c9e831.js" crossorigin="anonymous"></script>

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
            <li><a href="/" target="_blank"><i class="fas fa-home"></i><span>Veiw Front Page</span></a></li>
            <li><a href="{{route('dashboard')}}"><i class="fas fa-network-wired hovered"></i><span>Dashboard</span></a></li>
            <li><a href="{{route('posts.index')}}"><i class="far fa-edit"></i><span>Posts</span></a></li>
            <li><a href="{{route('tags.index')}}"><i class="fas fa-hashtag"></i><span>Tags</span></a></li>
            <li><a href="https://mailtrap.io/inboxes/936984/messages"><i class="far fa-envelope"></i><span>View Messages</span></a></li>
        </ul>
    </div>


    <!-- Content -->
    <div class="main">
            @yield('content')
    </div>

</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/3.9.0/less.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/admin.js') }}" type="text/javascript"></script>
@yield('scripts')

</body>
<div class="container">

</div>
</html>











