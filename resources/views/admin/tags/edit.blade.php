@extends('/layouts.backend')

@section('title', 'Edit Tag')

@section('content')
    <div class="container">

        {{--        added messaging--}}
        @include('/inc.messages')

            <h1>Edit Tag </h1>
            <br>

                <form method='post' action="{{ action('Admin\AdminTagsController@update', $tag->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="title" name="tag_name" class="form-control" value="{{$tag->name}}">
                                @error('tag_name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            <div class="form-group col-md-4">
                                <button type="submit" class="btn btn-primary btn-block">Update</button>
                             </div>
                    </div>
                </form>
        </div>

@endsection







