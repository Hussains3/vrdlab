@extends('layouts.app')
@section('title')
    Category
@endsection
@section('content')
<section class="hero_area_blog">
    <div class="container">

        <div class="hero_blog">
            <div class="category-text">
                <h2>{{$category->name}}</h2>
            </div>
        </div>
    </div>
</section>

<!-- ======================Blog-Hero===================== -->

<!-- ===================Blog-Area-start================= -->
<section>
    <div class="blog_area">
        <div class="container">
            <div class="row">
                @foreach ($category->articles as $article)
                <div class="col-md-6 col-sm-12">
                    <div class="blog-post">
                        <div class="blog-img">
                            <img src="{{asset($article->cover)}}" alt="{{$article->title}}">
                        </div>
                        <div class="blog_content">
                            <div class="blog-category-name">
                                <p>{{$article->category->name}}</p>
                            </div>
                            <div class="blog_name">
                                <a href="{{route('publication',$article->id)}}">{{$article->title}}</a>
                            </div>
                            <div class="blog_author">
                                <p>by, @foreach ($article->authours as $author)
                                    <a href="{{$author->link}}">{{$author->name}}</a>
                                    @endforeach
                                </p>
                            </div>
                            <div class="post_date">
                                <p> - {{date('M d, Y', strtotime($article->pub_date))}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>

<!-- ===================Blog-Area-End================= -->
@endsection

@section('script')
@endsection
