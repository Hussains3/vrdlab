<header>
    <div class="header_area">

        <div class="container">
            <div class="nav_area navbar">
                <div class="nav_left">
                    <a href="https://vrdlab.com/"><img src="{{asset('images/logo.svg')}}" alt=""
                            width="180px"></span></a>
                </div>
                <!-- Toggle-menu -->
                <div class="toggle_btn" id="toggle" onclick="toggleMenu()">
                    <span class="iconify" data-icon="ant-design:menu-outlined"></span>
                </div>
                <div class="nav_right" id="mobileMenu">
                    <a href="{{route('index')}}">Home</a>
                    <a href="{{route('ourResearchers')}}">Our Researchers</a>
                    <a href="{{route('researcher-area')}}">Research Area</a>
                    <a href="{{route('publications')}}">Publications</a>
                    <a href="{{route('contact')}}">Contact Us</a>
                    <!-- <a href="./author.html">Author</a>
                <a href="#"><span class="iconify" data-icon="bi:search"></span></a>
                <a href="#"><span class="iconify" data-icon="ant-design:menu-outlined"></span></a> -->
                </div>
            </div>
        </div>
    </div>
</header>
