@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Create New Author') }}</h1>
                    <a href="{{route('authors.index')}}" class="btn btn-sm btn-dark ">All Author</a>

                </div>

                <div class="card-body">
                    <form action="{{route('authors.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Author Name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Your Author Name">
                        </div>
                        <div class="mb-3">
                          <label for="link" class="form-label">Link</label>
                          <input type="text" class="form-control" name="link" id="link" placeholder="Profile link">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')

@endsection
