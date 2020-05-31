@extends('/layouts.backend')

@section('title', "Admin: Edit Comment")

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Edit Comment</h1>
            <hr>

            <form method='post' action="{{action('Admin\AdminCommentsController@update', $comment)}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input name="name" class="form-control" placeholder="Name:" value="{{$comment->author}}" disabled>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input name="title" class="form-control" placeholder="Email" value="{{$comment->email}}" disabled>
                </div>

                <div class="form-group">
                    <label>Comment:</label>
                    <textarea class="form-control" name="body" rows="10" placeholder="Body">{{$comment->body}}</textarea>'
                </div>
                @error('body')
                <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror

                <button type="submit" class="btn btn-primary btn-lg btn-block">Edit Comment</button>

            </form>
        </div>


    </div>



@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

@endsection

{{--@section('scripts')--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>--}}
{{--@endsection--}}


