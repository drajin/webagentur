@extends('/layouts.backend')


@section('title', "Admin: View Post")


@section('content')


    <div class="container">
        {{--        added messaging--}}
        @include('/inc.messages')


    <div class="row">
        <div class="col-md-8">
            <h1>{!! $post->title !!}</h1>
            <p class="lead">{!! $post->body!!}</p>
            @foreach($post->tags as $tag)
            <span class="badge badge-primary">{{$tag->name}}</span>
            @endforeach
        </div>

        <div class="col-md-4">
            <div class="card card-body bg-light">
                <dl class="dl-horizontal">
                    <dt>Url:</dt>
                    <dd><a href="{{url('blog/'.$post->slug)}}">{{url('blog/'.$post->slug)}}</a></dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{$post->created_at}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Updated At:</dt>
                    <dd>{{$post->updated_at}}</dd>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <a href="{{route('posts.edit', $post)}}" class="btn btn-primary btn-block">Edit</a>
                    </div>
                    <div class="col-sm-6">
                        <form method="POST" action="{{ action('Admin\AdminPostsController@destroy', $post->id) }}" >
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                            <div id="operations">
                                <input type="submit" name="commit" class="btn btn-danger btn-block" value="Delete" />
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12">
                        <a class="btn btn-secondary btn-block btn-h1-spacing" role="button"  href="{{route('posts.index')}}">Back to Index</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="backend-comments" style="margin-top: 50px">
            <h3>Comments <small>{{$post->comments->count()}}</small></h3>
        </div>
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Author</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Comment</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post->comments as $comment)
                        <tr>
                            <td>{{$comment->author}}</td>
                            <td>{{$comment->email}}</td>
                            <td>{{$comment->body}}</td>
                            <td>
                                <a href="{{route('comments.edit', $comment)}}" class="btn btn-sm btn-primary"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('comments.delete', $comment)}}" class="btn btn-sm btn-danger"><i class="fas fa-trash" ></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
    </div>




{{--    <form method='post' action="http://127.0.0.1:8000/admin/posts/3">--}}

{{--                <div class="form-group">--}}
{{--                    <label for="title">Title</label>--}}
{{--                    <input type="text" name="title" class="form-control" placeholder="Title">--}}
{{--                        @error('title')--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                        @enderror--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="body">Body</label>--}}
{{--                    <textarea class="form-control" name="body" rows="3" placeholder="Body"></textarea>--}}
{{--                        @error('body')--}}
{{--                        <strong>{{ $message }}</strong>--}}
{{--                        @enderror--}}
{{--                </div>--}}
{{--                <?php $tags = Tag::all() ?>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="tags">Tags</label>--}}
{{--                    <select--}}
{{--                        multiple class="form-control select2-multiple"--}}
{{--                        name="tags[]"--}}
{{--                        multiple--}}
{{--                            >--}}

{{--                        @foreach($tags as $tag)--}}
{{--                            <option value="{{ $tag->id }}">{{$tag->name}}</option>--}}
{{--                        @endforeach--}}

{{--                    </select>--}}
{{--                    @error('tags')--}}
{{--                    <strong>{{ $message }}</strong>--}}
{{--                    @enderror--}}
{{--                </div>--}}


{{--                <button type="submit" class="btn btn-primary">Submit</button>--}}


{{--        <button type="submit" class="btn btn-primary">Edit</button>--}}
{{--    </form>--}}



@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
@endsection
