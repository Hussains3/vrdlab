@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('dashboard.layouts.partials.messages')
                <div class="card-header d-flex justify-content-between">
                    <div class="">
                        <h1 class="fs-5">{{ $author->name}}</h1>
                        <p>{{$author->link}}</p>
                    </div>
                    <div class="">
                        <a href="{{route('authors.edit',$author->id)}}" class="btn btn-sm btn-dark ">Edit</a>
                        <a href="{{route('authors.index')}}" class="btn btn-sm btn-dark ">All</a>
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
