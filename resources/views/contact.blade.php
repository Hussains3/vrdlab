@extends('layouts.app')
@section('title')
Contact
@endsection
@section('content')
<section>
    <div class="get_in_touch">
        <h1>Get in touch with us</h1>
    </div>
</section>

<!-- ===================Get in touch========== -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card_main">
                    <div class="card_details">
                        <div class="card_icon">
                            <span class="iconify" data-icon="carbon:location-filled"></span>
                        </div>
                        <p>Home 315, Road 3,<br>
                            Phase 2, Sonadanga R/A,<br>
                            Khulna 9100, Bangladesh</p>

                    </div>
                    <div class="card_back">

                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card_main">
                    <div class="card_details">
                        <div class="card_icon">
                            <span class="iconify" data-icon="ant-design:phone-filled"></span>
                        </div>
                        <p>+880 1902 624 501</p>

                    </div>
                    <div class="card_back">

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card_main">
                    <div class="card_details">
                        <div class="card_icon">
                            <span class="iconify" data-icon="ant-design:mail-filled"></span>
                        </div>
                        <p>contact@vrdlab.com</p>

                    </div>
                    <div class="card_back">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================contact info========================= -->
<section class="contact_form">
    <div class="container">
        <form action="">
            <div class="form">
                <div class="input">
                    <input type="text" placeholder="Name">
                </div>
                <div class="input">
                    <input type="email" placeholder="Email">
                </div>
                <div class="input">
                    <input type="text" placeholder="University Name">
                </div>
                <div class="input">
                    <input type="text" placeholder="Subject Name">
                </div>
                <div class="text_area">
                    <textarea rows="6" placeholder="Message"></textarea>
                </div>
                <div class="submit">
                    <button type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
</section>





@endsection

@section('script')
@endsection