@extends('/layouts.backend')

@section('stylesheets')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" text="text/css" href="{{ asset('css/select2-bootstrap4.min.css') }}">
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
                    {!! $dataTable->input !!}
                </div>
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="title">Slug</label>
                    {!! $dataTable->slug !!}
                </div>
                @error('slug')
                    <div class="text-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="body">Body</label>
                    {!! $dataTable->text !!}
                    @include('inc.ckeditor')
                </div>
                @error('body')
                <div class="text-danger">{{ $message }}</div>
                @enderror

                <div class="form-group">
                    <label for="tags">Add Tags</label>
                    {!! $dataTable->select !!}
{{--                    <select multiple class="form-control select2-multiple" name="tags[]" >--}}
{{--                        @foreach($tags as $tag)--}}
{{--                        <option value="{{$tag->id}}">{{$tag->name}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
                </div>


                    {!! $dataTable->button !!}
            </form>
        </div>
    </div>



@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

@endsection

