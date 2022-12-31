@extends("layouts.app")
@section("content")
<div class="container">
    @include('flash_message')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Create List
                    <span>
                        <a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>
                    </span>
                    </h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Category</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($posts as $post)

                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->category->category_name}}</td>
                                <td><img src="{{asset('uploads/'.$post->image)}}" alt="" width="100px"></td>
                                <td>
                                    <a href="{{route('posts.show',$post->id)}}" class="btn btn-success">Show</a>
                                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                                    <form action="{{route('posts.destroy',$post->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                </tr>
                                @endforeach

                        </tbody>
                    </table>
                    <span>
                        <a href="{{route('categories.index')}}" class="btn btn-info ">Category Index</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
