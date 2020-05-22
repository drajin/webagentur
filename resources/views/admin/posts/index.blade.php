@extends('/layouts.backend')
@section('title', "Admin: Posts")

@section('content')
    <div class="container">
        {{--        added messaging--}}
        @include('/inc.messages')


        <div class="row">
            <div class="col-md-10">
                <h1>All Posts</h1>
            </div>

            <div class="col-md-2">
                <a href="{{ route('posts.create') }}" class="btn btn-lg btn-primary btn-h1-spacing">Create New Post</a>
            </div>
            <div class="col-md-12">
                <br>
            </div>
        </div> <!-- end of .row -->


        <div class="row">
            <div class="col-md-12">

                <table class="table">
                    <thead>
                        <th>#</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Created At</th>
                        <th>&nbsp</th>
                        <th>&nbsp</th>
                        <th>&nbsp</th>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{$post->id}}</th>
                            <td><a href="{{ route('posts.show', $post) }}">{!! $post->title !!}</a></td>
                            <td><a href="{{ route('posts.show', $post) }}">{!! substr($post->body, 0, 40)!!}{{ (strlen($post->body))>50 ? '...' : '' }}</a></td>
                            <td>{{date( 'j, M, Y', strtotime($post->created_at))}}</td>
                            <td><a href="{{route('posts.show', $post)}}" class="btn btn-primary">View</a></td>
                            <td><a href="{{route('posts.edit', $post)}}" class="btn btn-warning">Edit</a></td>
                            <td>
                                <form method="POST" action="{{ action('Admin\AdminPostsController@destroy', $post->id) }}" >
                                    @csrf
                                    <input type="hidden" name="_method" value="delete">
                                    <div id="operations">
                                        <input type="submit" name="commit" class="btn btn-danger float-right" value="Delete" />
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <!-- Pagination -->
                @include('inc.pagination', ['value' => $posts])
            </div>

            </div>
        </div>








@endsection
