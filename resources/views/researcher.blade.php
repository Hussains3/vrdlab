@extends('layouts.app')
@section('title')
    {{$researcher->name}}
@endsection
@section('content')
<!-- ========================Author-Hero=================== -->
<section>
    <div class="author_hero">
        <div class="container">
            <div class="author_hero_txt">
                <h2>Meet Our Honourable Researcher</h2>
            </div>
        </div>
    </div>
</section>
<!-- ========================Author-Hero-end=================== -->

<!-- ======================Author-Page================ -->
<section>
    <div class="author_page">
        <div class="container">
            <div class="col-md-12 offset-md-1">
                <div class="author_page_content">
                    <div class="auth_info">
                        <div class="auth_img">
                            <img src="{{asset($researcher->photo)}}" alt="">
                        </div>
                        <div class="author_dec">
                            <h2>{{$researcher->name}}</h2>
                            <small>{{$researcher->designation}}</small>
                            <div class="auth_social">
                                @if ($researcher->website)
                                <li><a href="{{$researcher->website}}" target="_blank"><span class="iconify" data-icon="bx:world"></span></a></li>
                                @endif
                                @if ($researcher->email)
                                <li><a href="mailto:{{$researcher->email}}" target="_blank"><span class="iconify" data-icon="bxl:gmail"></span></a></li>
                                @endif
                                @if ($researcher->linkedin)
                                <li><a href="{{$researcher->linkedin}}" target="_blank"><span class="iconify" data-icon="entypo-social:linkedin-with-circle"></span></a></li>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="auth_study_info">
                        <div class="auth_uni">
                            <div class="auth_icon">
                                <span class="iconify" data-icon="fa-solid:university"></span>
                            </div>
                            <div class="auth_icon_text">
                                <p>{{$researcher->uv_name}}</p>
                            </div>

                        </div>

                        <div class="auth_uni">
                            <div class="auth_icon">
                                <span class="iconify" data-icon="akar-icons:paper"></span>
                            </div>
                            <div class="auth_icon_text">
                                <p>{{$researcher->reserch_area}}</p>
                            </div>

                        </div>
                    </div>
                    <div class="auth_bblo">
                        <h2>Bibiliography</h2>
                        <p>{{$researcher->bio}}</p>
                    </div>

                    <div class="auth_publication">
                        <h2>Publications</h2>
                        @foreach ($researcher->publications as $article)
                            <div class="publication_paper">
                                <div class="pub_cat">
                                    <a href="{{route('category',$article->category->id)}}">{{$article->category->name}}</a> <span> - {{date('M d, Y', strtotime($article->pub_date))}}</span>
                                </div>
                                <div class="pub_title">
                                    <a href="{{route('publication',$article->id)}}">{{$article->title}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- ======================Author-Page-end================ -->
@endsection

@section('script')
@endsection
