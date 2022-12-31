@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <span><a href="{{route('categories.index')}}" class="btn btn-primary">Category Page</a> </span>
                    <span><a href="{{route('posts.index')}}" class="btn btn-success">Post Page</a></span>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
