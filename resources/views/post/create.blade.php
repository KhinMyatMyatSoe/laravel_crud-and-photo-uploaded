@extends("layouts.app")
@section("content")
<div class="container">
    @include('flash_message')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Post Create
                    <span>
                        <a href="{{route('posts.index')}}" class="btn btn-success">Back</a>
                    </span>
                    </h1>
                </div>
                <div class="card-body">
                    <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <select name="category_id" id="" class="form-select" >
                            <option value="">Select Category</option>
                            @foreach ($categories as $category )
                                <option value="{{$category->id}}">{{ $category->category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                    </div>
                    <div class="form-group mb-2">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" ></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="form-group mb-5">
                        <button type="submit" class="btn btn-primary">Add image</button>
                    </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
