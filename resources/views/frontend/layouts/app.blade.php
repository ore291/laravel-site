<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset(setting('site_favicon')) }}">
    <link rel="icon" type="image/png" href="{{ asset(setting('site_favicon')) }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    {{-- <title>@yield('title') | {{ setting('app_name') }}</title> --}}
    <title>@yield('title') | {{ setting('app_name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{ asset(setting('site_favicon')) }}">
    <link rel="icon" type="image" href="{{ asset(setting('site_favicon')) }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,700&family=Rubik:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/frontend.css') }}">
    <script src="https://kit.fontawesome.com/fe20a09b13.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.default.min.css') }}">

    <style>
        .blink_me,
        #ball {
            animation: blinker 3s linear infinite;
        }

        .owl-nav {
            position: absolute;
            inset: 0;
        }

        .owl-dots {
            display: none;
        }

        .left-arrow {
            display: block !important;
            height: 30px;
            width: 30px;
            position: absolute;

            cursor: pointer;
            left: 40px;
            top: 40%;
        }

        .right-arrow {

            display: block !important;

            height: 30px;
            width: 30px;
            position: absolute;

            cursor: pointer;
            top: 40%;
            right: 40px
        }
    </style>




    @stack('after-styles')

    <x-google-analytics />
</head>

<body>


    @include('frontend.includes.header')


    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')




</body>

<!-- Scripts -->
@stack('before-scripts')

<script src="{{ mix('js/frontend.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $(".owl-carousel").owlCarousel({
            items: 1,
            margin: 15,
            loop: true,
            nav: true,
            autoplay: true,
            navText: [
                '<div class="left-arrow"><img src="/img/left-arrow.png" alt="left-arrow" /></i></div>',
                '<div class="right-arrow"><img src="/img/right-arrow.png" alt="right-arrow" /></i></div>'
            ]
        });
    });
</script>
<script type="text/javascript" src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>

@stack('after-scripts')

</html>
