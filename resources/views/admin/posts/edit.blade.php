@extends('/layouts.backend')

@section('stylesheets')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" text="text/css" href="{{ asset('css/select2-bootstrap.min.css') }}">
@endsection

@section('title', "Admin: Edit Post")

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>Edit Post</h1>
            <hr>

            <form method='post' action="{{ action('Admin\AdminPostsController@update', $post) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title">Title</label>
                    {!! $dataTable->input !!}
                </div>
                @error('title')
                <strong>{{ $message }}</strong>
                @enderror

                <div class="form-group">
                    <label>Body</label>
                    {!! $dataTable->text !!}
                </div>
                @error('body')
                <strong>{{ $message }}</strong>
                @enderror
                {!! $dataTable->button !!}

            </form>
        </div>

    <div class="col-md-4">
        <div class="card card-body bg-light">
            <dl class="dl-horizontal">
                <dt>Create At:</dt>
                <dd>{{$post->created_at}}</dd>
            </dl>
            <dl class="dl-horizontal">
                <dt>Updated At:</dt>
                <dd>{{$post->updated_at}}</dd>
            </dl>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{route('posts.index')}}" class="btn btn-primary btn-block">Cancel</a>
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
            </div>
        </div>
    </div>
    </div>



@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
@endsection


