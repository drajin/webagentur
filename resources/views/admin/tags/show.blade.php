@extends('/layouts.backend')

@section('title', " $tag->name | Tag")


@section('content')
    <div class="container">
        {{--        added messaging--}}
        @include('/inc.messages')

    <div class="row">
        <div class="col-md-8">
            <h1>{{$tag->name}} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
        </div>
        <div class="col-md-2">
            <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-primary pull-right btn-block" >Edit</a>
        </div>
        <div class="col-md-2">

            <form method="POST" action="{{ action('Admin\AdminTagsController@destroy', $tag) }}" >
            @csrf
            <input type="hidden" name="_method" value="delete">
                <input type="submit" name="delete" class="btn btn-danger btn-block" value="Delete" />
            </form>

        </div>
    </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Tags</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tag->posts as $post)
                            <tr>
                                <th>{{$post->id}}</th>
                                <td>{{$post->title}}</td>
                                <td>@foreach($post->tags as $tag)
                                    <span class="badge badge-secondary">{{$tag->name}}</span>
                                        @endforeach
                                </td>
                                <td><a href="{{route('posts.edit', $post->id)}}" class="btn btn-outline-dark btn-sm">View</a></td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
