<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SAMA INTERNATIONAL</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

{{--<div id="overlayer"></div>--}}
{{--<div class="loader">--}}
{{--    <div class="spinner-border text-primary" role="status">--}}
{{--        <span class="sr-only">Loading...</span>--}}
{{--    </div>--}}
{{--</div>--}}

@yield('content')

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="footer-heading mb-4">About Us</h2>
                        <p>Online recruitment firm for Domestic Helper based in Saudi Arabia. </p>
                    </div>
                    {{--                    <div class="col-md-4 ml-auto">--}}
                    {{--                        <h2 class="footer-heading mb-4">Features</h2>--}}
                    {{--                        <ul class="list-unstyled">--}}
                    {{--                            <li><a href="#">About Us</a></li>--}}
                    {{--                            <li><a href="#">Testimonials</a></li>--}}
                    {{--                            <li><a href="#">Terms of Service</a></li>--}}
                    {{--                            <li><a href="#">Privacy</a></li>--}}
                    {{--                            <li><a href="#">Contact Us</a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <div class="col-md-4 ml-auto">

                {{--                <div class="mb-5">--}}
                {{--                    <h2 class="footer-heading mb-4">Subscribe to Newsletter</h2>--}}
                {{--                    <form action="#" method="post" class="footer-suscribe-form">--}}
                {{--                        <div class="input-group mb-3">--}}
                {{--                            <input type="text" class="form-control border-secondary text-white bg-transparent"--}}
                {{--                                   placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">--}}
                {{--                            <div class="input-group-append">--}}
                {{--                                <button class="btn btn-primary text-white" type="button" id="button-addon2">Subscribe--}}
                {{--                                </button>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                </div>--}}


                <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#about-section" class="smoothscroll pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </form>
            </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
            <div class="col-md-12">
                <div class="border-top pt-5">
                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        All rights reserved | This template is made with <i class="icon-heart text-danger"
                                                                            aria-hidden="true"></i> by <a
                            href="https://github.com/throwexceptions" target="_blank">Throwexceptions</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </div>
</footer>


<script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('template/js/popper.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.sticky.js') }}"></script>
<script src="{{ asset('template/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('template/js/aos.js') }}"></script>

<script src="{{ asset('template/js/main.js') }}"></script>

</body>

</html>
