@extends("layouts.app")
@section("content")
<div class="container">
    @include('flash_message')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Category Create
                    <span>
                        <a href="{{route('categories.index')}}" class="btn btn-primary">Back</a>
                    </span>
                    </h1>
                </div>
                <div class="card-body">
                    {{-- create form  --}}
                    <form action="{{route('categories.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input type="text" name="category_name" class="form-control" id="name" placeholder="Enter Category Name">
                    </div>
                    <input type="submit" class="btn btn-success mt-3" value="Created Category">
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
