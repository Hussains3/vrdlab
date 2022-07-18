@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ __('Create New Category') }}</h1>
                    <a href="{{route('categories.index')}}" class="btn btn-sm btn-dark ">All Category</a>

                </div>

                <div class="card-body">
                    <form action="{{route('categories.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Category Name</label>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Your Category Name">
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
