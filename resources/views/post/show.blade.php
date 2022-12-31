@extends("layouts.app")
@section("content")
<div class="container">

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Post Detail
                    <span>
                        <a href="{{route('posts.index')}}" class="btn btn-success">Back</a>
                    </span>
                    </h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <td>{{$post_show->id}}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{$post_show->title}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{$post_show->description}}</td>
                        </tr>
                        <tr>
                            <th>Post category</th>
                            <td>{{$post_show->category->category_name}}</td>
                        </tr>
                        <tr>
                            <th>Post Image</th>
                            <td>
                                <img src="{{asset('uploads/'.$post_show->image)}}" alt="" width="200px" height="200px">
                            </td>
                        </tr>
                        <tr>
                            <th>Created At</th>
                            <td>{{$post_show->created_at}}</td>
                        </tr>
                        <tr>
                            <th>Updated At</th>
                            <td>{{$post_show->updated_at}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
