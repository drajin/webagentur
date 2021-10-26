@extends('/layouts.backend')

@section('content')




    <div class="jumbotron">
        <ul class="list-group">
            <li class="list-group-item active"><h1>Welcome to the Admin Panel {{$user->name}}</h1></li>
            <li class="list-group-item"><a href="{{route('posts.create')}}"><i class="fas fa-pencil-alt"></i> Write a new Post</a></li>
            <li class="list-group-item"><a href="{{route('posts.index')}}"><i class="fas fa-edit"></i> Edit an existing Post</a></li>
            <li class="list-group-item"><a href="{{route('tags.index')}}"><i class="fas fa-tag"></i> Add a Tag</a></li>
            <li class="list-group-item"><a href="/blog"><i class="fas fa-eye"></i> View your Blog</a></li>
            <li class="list-group-item">
                <form method="post" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-link"><i class="fas fa-sign-out-alt"></i><span>Logout</span></button>
                </form>
            </li>
        </ul>
    </div>



@endsection
