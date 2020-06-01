@extends('/layouts.backend')

@section('title', 'Tags')

@section('content')
    <div class="container">
    {{--        added messaging--}}
    @include('/inc.messages')

         <div class="row">
             <div class="col-md-8">
                 <h1>Tags</h1>
                 <table class="table">
                     <thead>
                        <th>#</th>
                        <th>Name</th>
                     </thead>

                     <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <th>{{$tag->id}}</th>
                                <td><a href="{{route('tags.show', $tag->id)}}">{{$tag->name}}</a></td>
                            </tr>
                         @endforeach
                     </tbody>
                 </table>
             </div>


        <div class="col-md-3">
            <div class="card card-body bg-light">
                <form method="post" action="{{ action('Admin\AdminTagsController@store') }}" >
                    @csrf
                        <div class="form-group">
                            <label for="title">Tag Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Tag name">
                                @error('name')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                        </div>
                    <button type="submit" class="btn btn-primary btn-block btn-h1-spacing">Create</button>
                </form>

            </div>
        </div>
        </div>





    </div>
@endsection
