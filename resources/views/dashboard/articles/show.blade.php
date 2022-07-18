@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('dashboard.layouts.partials.messages')
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ $category->name}}</h1>
                    <div class="">
                        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-dark ">Edit</a>
                        <a href="{{route('categories.index')}}" class="btn btn-sm btn-dark ">All</a>
                    </div>

                </div>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
</script>
@endsection
