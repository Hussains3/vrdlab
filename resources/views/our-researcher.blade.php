@extends('layouts.app')
@section('title')
Our Researcher
@endsection
@section('content')
<section>
    <div class="meet_our_recharcher">
        <div class="containe">
            <div class="meet_text">
                <h2>Meet Our Honourable Researcher</h2>
            </div>
        </div>
    </div>
</section>

<!-- =============Recharcher-Text================ -->
<section>
    <div class="reacher our_recharcher">
        <div class="container">
            <div class="row">
                @foreach ($researchers as $researcher)
                <div class="col-md-4">
                    <div class="rechare_card">
                        <div class="rcard_img" style="background-image: url({{asset($researcher->photo)}})">
                            <div class="image_round"></div>
                            <!-- <img src="{{ asset($researcher->photo) }}" alt=""> -->
                        </div>
                        <div class="rInfo">
                            <h2>{{ $researcher->name }}</h2>
                            <p>{{ $researcher->designation }}</p>
                        </div>
                        <div class="rSpace">
                            <div class="rStady">
                                <div class="ricon"><span class="iconify" data-icon="fa-solid:university"></span>
                                </div>
                                <div class="rtext">
                                    <p>{{ $researcher->uv_name }}</p>
                                </div>
                            </div>
                            <div class="rStady">
                                <div class="ricon"><span class="iconify" data-icon="simple-line-icons:doc"></span>
                                </div>
                                <div class="rtext">
                                    <p>{{ $researcher->reserch_area }}</p>
                                </div>
                            </div>
                            <div class="recharcher-bio">
                                <p data-bs-toggle="modal" data-bs-target="#exampleModal{{$researcher->id}}">
                                    Bibliography<span class="iconify" data-icon="bx:right-arrow-alt"><span></p>

                                <a href="{{ route('researcherpub', $researcher->id) }}">Publications<span
                                        class="iconify" data-icon="bx:right-arrow-alt"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
                            <a href="{{ $researcher->website }}" target="_blank"><span class="iconify"
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
@endsection

@section('script')
@endsection
