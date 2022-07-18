@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Edit') }}</h1>
                    <a href="{{route('authors.index')}}" class="btn btn-sm btn-dark ">All Author</a>

                </div>

                <div class="card-body">
                    <form action="{{route('authors.update',$author->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="mb-3">
                          <label for="name" class="form-label">Author Name</label>
                          <input type="text" class="form-control" name="name" id="name" value="{{$author->name}}">
                        </div>
                        <div class="mb-3">
                          <label for="link" class="form-label">Profile Link</label>
                          <input type="text" class="form-control" name="link" id="link" value="{{$author->link}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
