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
                <div class="recharchr_slide recharchSwiper swiper ">
                    <div class=" swiper-wrapper">
                        @foreach ($researchers as $researcher)
                            <div class="swiper-slide">
                                <div class="rechare_card">
                                    <div class="rcard_img">
                                        <img src="{{ asset($researcher->photo) }}" alt="">
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
                                            <button data-bs-toggle="modal" data-bs-target="#exampleModal1">Bibliography<span class="iconify" data-icon="bx:right-arrow-alt"><span><button>
                                            <div class="">
                                                <a href="{{ route('researcherpub', $researcher->id) }}">Publications<span class="iconify" data-icon="bx:right-arrow-alt"></span></a>
                                            </div>
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
        </div>
    </section>
    <!-- =================modal content Area============================ -->
    <section>
        <div class="modal_content_area">
            <!-- Modal -->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
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
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content ">
                        <div class="modal-body">
                            <div class="recharcher_info">
                                <h3>About</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                    iusto accusantium quaerat, fuga maiores dolorum quidem?Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#"><span class="iconify" data-icon="bx:world"></span></a>
                                <a href="#"><span class="iconify" data-icon="entypo:email"></span></a>
                                <a href="#"><span class="iconify"
                                        data-icon="entypo-social:linkedin-with-circle"></span></a>
                            </div>

                            <div class="recharcher_logo">
                                <img src="./img/Howard_University.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content ">
                        <div class="modal-body">
                            <div class="recharcher_info">
                                <h3>About</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                    iusto accusantium quaerat, fuga maiores dolorum quidem?Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#"><span class="iconify" data-icon="bx:world"></span></a>
                                <a href="#"><span class="iconify" data-icon="entypo:email"></span></a>
                                <a href="#"><span class="iconify"
                                        data-icon="entypo-social:linkedin-with-circle"></span></a>
                            </div>

                            <div class="recharcher_logo">
                                <img src="./img/Howard_University.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content ">
                        <div class="modal-body">
                            <div class="recharcher_info">
                                <h3>About</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                    iusto accusantium quaerat, fuga maiores dolorum quidem?Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#"><span class="iconify" data-icon="bx:world"></span></a>
                                <a href="#"><span class="iconify" data-icon="entypo:email"></span></a>
                                <a href="#"><span class="iconify"
                                        data-icon="entypo-social:linkedin-with-circle"></span></a>
                            </div>

                            <div class="recharcher_logo">
                                <img src="./img/Howard_University.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content ">
                        <div class="modal-body">
                            <div class="recharcher_info">
                                <h3>About</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                    iusto accusantium quaerat, fuga maiores dolorum quidem?Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#"><span class="iconify" data-icon="bx:world"></span></a>
                                <a href="#"><span class="iconify" data-icon="entypo:email"></span></a>
                                <a href="#"><span class="iconify"
                                        data-icon="entypo-social:linkedin-with-circle"></span></a>
                            </div>

                            <div class="recharcher_logo">
                                <img src="./img/Howard_University.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content ">
                        <div class="modal-body">
                            <div class="recharcher_info">
                                <h3>About</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                    iusto accusantium quaerat, fuga maiores dolorum quidem?Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Harum quas possimus quam,
                                    minus rerum voluptate hic labore quidem explicabo eligendi in? Recusandae commodi
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#"><span class="iconify" data-icon="bx:world"></span></a>
                                <a href="#"><span class="iconify" data-icon="entypo:email"></span></a>
                                <a href="#"><span class="iconify"
                                        data-icon="entypo-social:linkedin-with-circle"></span></a>
                            </div>

                            <div class="recharcher_logo">
                                <img src="./img/Howard_University.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
