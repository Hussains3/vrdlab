@extends('layouts.app')
@section('title')
Article
@endsection
@section('content')
<section class="article-hero_area">
    <div class="container">
        <div class="article-hero">
            <a href="#">{{$article->category->name}}</a>
            <h2>{{$article->title}}</h2>
        </div>
        <div class="article_author_info">
            <p><span>by,</span>@foreach ($article->authours as $author)
                <a href="{{$author->link}}" target="_black">{{$author->name}}</a>
                @endforeach - {{date('M d, Y', strtotime($article->pub_date))}}
            </p>
            <p>Publisher : {{$article->publisher}}</p>
            <p>Total Citation: Cited by {{$article->citation}}</p>
            <div class="article_doi_area_link">
                <a href="{{$article->doi}}" target="_blank"><Span>DOI:</Span> {{$article->doi}}</a>
            </div>
        </div>
    </div>
</section>

<!-- ======================Hero====================== -->


<section>
    <div class="ariticale_details">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="article_area">
                        <div class="article_text">
                            <div class="abostrac">
                                <div class="h2">Abstract</div>
                                <p>{{$article->abstract}}</p>
                                <div class="read_more">
                                    <a href="{{$article->link}}" target="_blank">Read Full Paper</a>
                                </div>

                            </div>
                            <div class="doiShare doi-gap">
                                <div class="doiSharetex">
                                    <h2>Share this research</h2>
                                </div>
                                <div class="shareSocial">
                                    <ul>
                                        <li><a href="https://www.facebook.com/sharer/sharer.php?u={{route('publication',$article->id)}}"
                                                target="_blank"><span class="iconify"
                                                    data-icon="entypo-social:facebook-with-circle"></span></a></li>
                                        <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{route('publication',$article->id)}}"
                                                target="_blank"><span class="iconify"
                                                    data-icon="entypo-social:linkedin-with-circle"></span></a></li>
                                        <li><a href="mailto:https://mail.google.com/?subject=I wanted you to see this site&amp;body=Check out this site {{route('publication',$article->id)}}"
                                                title="Share by Email"><span class="iconify"
                                                    data-icon="ant-design:google-circle-filled"></span></a></li>
                                        <li><button class="clipboard-link"> <span class="iconify"
                                                    data-icon="ant-design:copy-outlined"></span></button></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="read_head">
                        <h2> Read Latest Article</h2>
                    </div>
                    @foreach ($relatedArticles as $article)
                    <div class="publish_card-area">

                        <div class="col-12">

                            <div class="publish_card_read">
                                <div class="pub_img_read">
                                    <img src="{{asset($article->cover)}}" alt="">
                                </div>
                                <div class="publish_des_read ">
                                    <small>{{$article->category->name}}</small>
                                    <a href="{{route('publication',$article->id)}}">{{$article->title}}</a>
                                </div>
                                <div class="pub_aut_info_read">
                                    <p>by, @foreach ($article->authours as $author)
                                        <a href="{{$author->link}}">{{$author->name}}</a>,
                                        @endforeach - {{date('M d, Y', strtotime($article->pub_date))}}
                                    </p>
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
@endsection
@section('script')
@endsection
