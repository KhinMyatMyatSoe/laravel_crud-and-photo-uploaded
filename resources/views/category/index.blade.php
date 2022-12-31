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
                        <a href="{{route('categories.create')}}" class="btn btn-success">Create Category</a>
                    </span>

                    </h1>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->category_name}}</td>
                                <td>{{$category->created_at->diffForHumans()}}</td>
                                <td>{{$category->updated_at->diffForHumans()}}</td>
                                <td>
                                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('categories.show',$category->id)}}" class="btn btn-success">Show</a>
                                    <form action="{{route('categories.destroy',$category->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <span>
                        <a href="{{route('posts.index')}}" class="btn btn-info ">Post Index</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
