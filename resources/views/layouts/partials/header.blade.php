<header>
    <div class="container">
        <div class="nav_area">
            <div class="nav_left">
                <a href="#"><img src="./images/logo.png" alt=""></span></a>
            </div>
            <!-- Toggle-menu -->
            <div class="toggle_btn" id="toggle" onclick="toggleMenu()">
                <span class="iconify" data-icon="ant-design:menu-outlined"></span>
            </div>
            <div class="nav_right" id="mobileMenu">
                <a href="{{route('index')}}">Home</a>
                <a href="{{route('ourResearchers')}}">Our Researchers</a>
                <a href="#">Research Area</a>
                <a href="{{route('publications')}}">Publications</a>
                <a href="#">Contact Us</a>
                <a href="./author.html">Author</a>
                <a href="#"><span class="iconify" data-icon="bi:search"></span></a>
                <a href="#"><span class="iconify" data-icon="ant-design:menu-outlined"></span></a>
            </div>
        </div>
    </div>
</header>
