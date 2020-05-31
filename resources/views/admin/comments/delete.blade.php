@extends('/layouts.backend')

@section('title', "Admin: Delete Comment")


@section('content')

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>Delete this Comment</h1>
            <hr>
            <p>
                <strong>Name: </strong>{{$comment->author}} <br>
                <strong>E-mail: </strong>{{$comment->email}} <br>
                <strong>Comment: </strong>{{$comment->body}} <br>
            </p>

            <form method="post" action="{{action('Admin\AdminCommentsController@destroy', $comment)}}" >
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-lg btn-block btn-danger" value="Delete" />
            </form>

        </div>


    </div>



@endsection




