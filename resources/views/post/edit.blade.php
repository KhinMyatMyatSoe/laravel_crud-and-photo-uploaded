@extends("layouts.app")
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Post Update
                    <span>
                        <a href="{{route('posts.index')}}" class="btn btn-success">Back</a>
                    </span>
                    </h1>
                </div>
                <div class="card-body">
                    <form action="{{route('posts.update',$post_edit->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <select name="category_id" id="" class="form-select" >
                            <option value="">Select Category</option>
                            @foreach ($categories_edit as $category )
                                <option value="{{$category->id}}" selected>{{ $category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$post_edit->title}}">
                    </div>
                    <div class="form-group mb-2">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" >{{$post_edit->description}}</textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image</label>
                        <img src="{{asset('uploads/'.$post_edit->image)}}" alt="" width="100px" height="100px">
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="form-group mb-5">
                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
