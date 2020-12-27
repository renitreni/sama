@extends('layouts.public')

@section('content')
<div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    @include('layouts.partials.header-menu')

    <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1 overlay"
             style="background-image: url('{{ asset('imag/tower.jpg') }}')">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h1>We Are Sama International Recruitment Agency!</h1>
                        <p class="mb-5">A landbased staffing and recruitment firm. It aims to serve clients in a flexible, personal and ethical manner while striving to achieve the most cost-effective solution: an organization driven with resourcefulness, aggressiveness and professionalism.</p>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#" class="btn btn-primary text-white px-4">I would like to Apply!</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="btn btn-success text-white px-4">I am an Employer!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END .ftco-cover-1 -->
        <div class="ftco-service-image-1 pb-5">
            <div class="container">
                <div class="owl-carousel owl-all">
                    <div class="service text-center">
                        <a href="#"><img src="{{ asset('imag/dh.jpg') }}" alt="Image" class="img-fluid"></a>
                        <div class="px-md-3">
                            <h3><a href="#">Certified</a></h3>
                            <p> In the old traditional background screening, employer can request the working history of Foreign Domestic Worker (FDW) and their medical fit examine.</p>
                        </div>
                    </div>
                    <div class="service text-center">
                        <a href="#"><img src="{{ asset('imag/dh.jpg') }}" alt="Image" class="img-fluid"></a>
                        <div class="px-md-3">
                            <h3><a href="#">Recognized</a></h3>
                            <p>Aljawdah is one of the recognized foreign domestic worker agencies here in kingdom of Saudia Arabia, as we do our selection process on different platform of some manpower agencies.</p>
                        </div>
                    </div>
                    <div class="service text-center">
                        <a href="#"><img src="{{ asset('imag/dh.jpg') }}" alt="Image" class="img-fluid"></a>
                        <div class="px-md-3">
                            <h3><a href="#">Trustworthy</a></h3>
                            <p>The applicant before start to work with the employer. Our process allows us to place confidence and trust of every employer and Foreign Domestic Worker (FDW).</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="site-section bg-light" id="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-up" data-aos-delay="">
                <div class="block-heading-1">
                    <span>Get In Touch</span>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                <form action="#" method="post">
                    <div class="form-group row">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Email address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea name="" id="" class="form-control" placeholder="Write your message." cols="30"
                                      rows="10"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 mr-auto">
                            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5"
                                   value="Send Message">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                <div class="bg-white p-3 p-md-5">
                    <h3 class="text-black mb-4">Contact Info</h3>
                    <ul class="list-unstyled footer-link">
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Address:</span>
                            <span>Coming Soon.</span>
                        </li>
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Cellphone:</span>
                            <span>Coming Soon.</span>
                        </li>
                        <li class="d-block mb-3">
                            <span class="d-block text-black">Land-line:</span>
                            <span>Coming Soon.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
