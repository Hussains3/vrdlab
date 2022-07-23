<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('favicon.png')}}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- ==================Swiper================== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- ==================Swiper================== -->
    <title>@yield('title')</title>
</head>

<body>
    @include('layouts.partials.header')
    <!-- =======================Nav========================== -->
    @yield('content')
    <!-- ==============================Recharcer======================== -->
    @include('layouts.partials.footer')
    <!-- =====================Footer================== -->
    @include('layouts.partials.script')
    @yield('script')
</body>

</html>
