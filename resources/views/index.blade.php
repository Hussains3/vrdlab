@extends('layouts.app')
@section('title')
Home
@endsection
@section('content')
<section class="hero_area">
    <div class="container">
        <div class="hero">
            <a href="#">Our Research Area</a>
            <h2>Gene Sequence<br> Data Analysis</h2>
        </div>
    </div>
</section>

<!-- ======================Hero====================== -->
<section class="show_area">
    <div class="container">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($articles as $article)
                <div class="swiper-slide">
                    <div class="slide_show">
                        <div class="doiTop">
                            <p>{{ $article->category->name }}</p>
                            <h2>{{ $article->title }}
                            </h2>
                        </div>
                        <div class="author_info">
                            <p>by, @foreach ($article->authours as $author)
                                <a href="{{ $author->link }}">{{ $author->name }}, </a>
                                @endforeach
                                <span>
                                    - {{ date('M d, Y', strtotime($article->pub_date)) }}
                                </span>
                            </p>

                            <div class="doi_area_link">
                                <a href="{{ $article->doi }}" target='_blank'><Span>DOI:</Span>{{ $article->doi }}</a>
                            </div>
                        </div>
                        <div class="show_img">
                            <img src="{{ asset($article->cover) }}" alt="">
                        </div>
                        <div class="doiDes">
                            <h2>Abstract</h2>
                            <p>{{ $article->abstract }}</p>
                            <div class="read_more">
                                <a href="{{ $article->link }}">Read Full Paper</a>
                            </div>
                        </div>
                        <div class="doiShare">
                            <div class="doiSharetex">
                                <h2>Share this research</h2>
                            </div>
                            <div class="shareSocial">
                                <ul>
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('publication', $article->id) }}"
                                            target="_blank"><span class="iconify"
                                                data-icon="entypo-social:facebook-with-circle"></span></a></li>
                                    <li><a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('publication', $article->id) }}"
                                            target="_blank"><span class="iconify"
                                                data-icon="entypo-social:linkedin-with-circle"></span></a></li>
                                    <li><a href="mailto:https://mail.google.com/?subject=I wanted you to see this site&amp;body=Check out this site {{ route('publication', $article->id) }}"
                                            title="Share by Email"><span class="iconify"
                                                data-icon="ant-design:google-circle-filled"></span></a></li>
                                    <li><button class="clipboard-link" onclick="copyUrl({{ $article->id }})">
                                            <span class="iconify" data-icon="ant-design:copy-outlined"></span><span
                                                class="copied" id="copied{{ $article->id }}"
                                                style="display:none;">Copied.</span></button>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>


<!-- =================slide_show=================== -->
<section>
    <div class="recentPublish">
        <div class="container">

            <div class="publish_text">
                <h2>Recent Publications</h2>
            </div>
            <div class="publish postSwiper swiper">
                <div class=" swiper-wrapper">

                    @foreach ($articles as $article)
                    <div class="swiper-slide">
                        <div class="publish_card">
                            <div class="pub_img">
                                <img src="{{ asset($article->cover) }}" alt="">
                            </div>
                            <div class="publish_des">
                                <small>{{ $article->category->name }}</small>
                                <a href="{{ route('publication', $article->id) }}">{{ $article->title }}</a>
                            </div>
                            <div class="pub_aut_info">
                                <p>
                                    by, @foreach ($article->authours as $author)
                                    <a href="{{ $author->link }}">{{ $author->name }},</a>
                                    @endforeach
                                    -{{ date('M d, Y', strtotime($article->pub_date)) }}
                                </p>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="postSlider_btn">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- ========================Publish Card================== -->

<section>
    <div class="reacher">
        <div class="recharch_text">
            <h2>Meet Our Honorable Researcher</h2>
        </div>
        <div class="container">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="recharchr_slide recharchSwiper swiper ">
                        <div class=" swiper-wrapper">

                            @foreach ($researchers as $researcher)
                            <div class="swiper-slide">

                                <div class="rechare_card">
                                    <div class="rcard_img">
                                        <img src="{{ $researcher->photo }}" alt="">
                                    </div>
                                    <div class="rInfo">
                                        <h2>{{ $researcher->name }}</h2>
                                        <p>{{ $researcher->designation }}</p>
                                    </div>
                                    <div class="rSpace">
                                        <div class="rStady">
                                            <div class="ricon"><span class="iconify"
                                                    data-icon="fa-solid:university"></span>
                                            </div>
                                            <div class="rtext">
                                                <p>{{ $researcher->uv_name }}</p>
                                            </div>
                                        </div>
                                        <div class="rStady">
                                            <div class="ricon"><span class="iconify"
                                                    data-icon="simple-line-icons:doc"></span>
                                            </div>
                                            <div class="rtext">
                                                <p>{{ $researcher->reserch_area }}</p>
                                            </div>
                                        </div>
                                        <div class="recharcher-bio">
                                            <p data-bs-toggle="modal"
                                                data-bs-target="#exampleModal{{ $researcher->id }}">Bibliography<span
                                                    class="iconify" data-icon="bx:right-arrow-alt"><span>
                                            </p>

                                            <a href="{{ route('researcherpub', $researcher->id) }}">Publications<span
                                                    class="iconify" data-icon="bx:right-arrow-alt"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</section>
<!-- =================modal content Area============================ -->
<section>
    <div class="modal_content_area">

        @foreach ($researchers as $researcher)
        <!-- Modal -->
        <div class="modal fade" id="exampleModal{{$researcher->id}}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="recharcher_info">
                            <h3>About</h3>
                            <p>{{ $researcher->bio }}
                            </p>
                        </div>
                        <div class="modal-footer">
                            @if ($researcher->website)
                            <a href="{{$researcher->website}}" target="_blank"><span class="iconify"
                                    data-icon="bx:world"></span></a>
                            @endif
                            @if ($researcher->email)
                            <a href="mailto:{{ $researcher->email }}"><span class="iconify"
                                    data-icon="entypo:email"></span></a>
                            @endif

                            @if ($researcher->linkedin)
                            <a href="{{ $researcher->linkedin }}" target="_blank"><span class="iconify"
                                    data-icon="entypo-social:linkedin-with-circle"></span></a>
                            @endif


                        </div>

                        <div class="recharcher_logo">
                            <img src="{{ asset($researcher->uv_logo) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- ==============================Recharcer======================== -->
@endsection



@section('script')
<script>
var base_url = window.location.origin;

function copyUrl(id) {
    navigator.clipboard.writeText(base_url + '/publication/' + id);
    $('#copied' + id).fadeIn();
    setTimeout(function() {
        $('#copied' + id).fadeOut(1000);
    }, 500);
}
</script>
@endsection