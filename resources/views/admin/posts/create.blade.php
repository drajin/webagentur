@extends('/layouts.backend')

@section('stylesheets')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" text="text/css" href="{{ asset('css/select2-bootstrap.min.css') }}">
@endsection

@section('title', "Create new Post")

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>

            <form method='post' action="{{ action('Admin\AdminPostsController@store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" class="form-control" placeholder="Title">
                </div>
                @error('title')
                <strong>{{ $message }}</strong>
                @enderror

                <div class="form-group">
                    <label>Body</label>
                    <textarea class="form-control" name="body" rows="3" placeholder="Body"></textarea>
                </div>
                @error('body')
                <strong>{{ $message }}</strong>
                @enderror
                <button type="submit" class="btn btn-primary btn-lg btn-block">Create Post</button>

            </form>
        </div>
    </div>



@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
@endsection

