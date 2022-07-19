@extends('dashboard.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                @include('dashboard.layouts.partials.messages')
                <div class="card-header d-flex justify-content-between">
                    <h1 class="fs-5">{{ $article->title}}</h1>
                    <div class="">
                        <a href="{{route('articles.edit',$article->id)}}" class="btn btn-sm btn-dark ">Edit</a>
                        <a href="{{route('articles.index')}}" class="btn btn-sm btn-dark ">All</a>
                    </div>

                </div>

                <div class="card-body">
                    <div class=""><p class="bg-dark text-light px-2 py-1 d-inline rounded">{{$article->category->name}}</p></div>
                    <div class="">
                        <h2>{{$article->title}}</h2>
                    </div>
                    <p>by, @foreach ($article->authours as $author)
                        <a href="{{$author->link}}" target="_blank">{{$author->name}}, </a>
                    @endforeach <span>- {{date('M d, Y', strtotime($article->pub_date))}}</span></p>
                    <p><span class="fs-6 p-1 bg-primary rounded me-2">DOI:</span>{{$article->doi}}</p>
                    <div class="">
                        <img src="{{asset($article->cover)}}" alt="" width="100%">
                    </div>
                    <div class="">
                        <h3>Abstract</h3>
                        <p>{{$article->abstract}}</p>
                        <a href="{{$article->link}}" class="btn btn-sm btn-primary">Read Full Article</a>
                    </div>
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
