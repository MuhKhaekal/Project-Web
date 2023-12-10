@extends('layouts.app')

@section('content')
    <section class="section-hero overlay inner-page p-3" style="background-image: url('{{ asset('assets/images/bg.jpg') }}'); margin-top:-24px;">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">About</h1>
                    <div class="custom-breadcrumbs">
                        <a href="">Home</a> <span class="mx-2 slash"></span>
                        <a href="">Job</a> <span class="mx-2 slash"></span>
                        <span class="text-dark"> <strong>About</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-image overlay-primary fixed overlay" id="next-section" style="background-image: url();">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="section-title mb-2 text-dark">JobBoard Site Stats</h2>
                    <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nisi rerum fugit velit quas necessitatibus recusandae maiores, quaerat suscipit provident.</p>
                </div>
            </div>
            <div class="row pb-0 block__19738 section-counter">
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="1930">0</strong>
                    </div>
                    <span class="caption">Candidates</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="54">0</strong>
                    </div>
                    <span class="caption">Jobs Posted</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="120">0</strong>
                    </div>
                    <span class="caption">Jobs Filled</span>
                </div>
                <div class="col-6 col-md-6 col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex align-items-center justify-content-center mb-2">
                        <strong class="number" data-number="550">0</strong>
                    </div>
                    <span class="caption">Companies</span>
                </div>
                

            </div>
        </div>
    </section>

    <section class="site-section pb-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788"><span class="play-icon"><span class="icon-play"></span></span>
                    <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
                    </a>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-title mb-3">JobBoard for Freelancers, Web Developers</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque iure asperiores exercitationem repellat cumque nulla assumenda a tempora dicta ipsa.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis similique totam quidem quos! Omnis, pariatur fugiat necessitatibus amet unde voluptates?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0 order-md-2">
                    <a data-fancybox data-ratio="2" href="https://vimeo.com/317571768" class="block__96788"><span class="play-icon"><span class="icon-play"></span></span>
                    <img src="images/sq_img_6.jpg" alt="Image" class="img-fluid img-shadow">
                    </a>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-title mb-3">JobBoard for Workers</h2>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque iure asperiores exercitationem repellat cumque nulla assumenda a tempora dicta ipsa.</p>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis similique totam quidem quos! Omnis, pariatur fugiat necessitatibus amet unde voluptates?</p>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade">
                    <h2 class="section-title mb-3">Our Team</h2>
                </div>
                <div class="row align-items-center block__69944">
                    <div class="col-md-6">
                        <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-4 rounded">
                    </div>
                    <div class="col-md-6">
                        <h3>Muhammad Khaekal</h3>
                        <p class="text-muted">Creative Director</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur numquam ipsa fuga in ea officiis quo ut eos explicabo unde.</p>
                        <div class="social mt-4">
                            <a href=""><span class="icon-facebook"></span></a>
                            <a href=""><span class="icon-instagram"></span></a>
                            <a href=""><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                    
                    <div class="col-md-6 order-md-2 ml-md-auto">
                        <img src="images/person_5.jpg" alt="Image" class="img-fluid mb-4 rounded">
                    </div>
                    <div class="col-md-6">
                        <h3>Muhammad Khaekal</h3>
                        <p class="text-muted">Creative Director</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur numquam ipsa fuga in ea officiis quo ut eos explicabo unde.</p>
                        <div class="social mt-4">
                            <a href=""><span class="icon-facebook"></span></a>
                            <a href=""><span class="icon-instagram"></span></a>
                            <a href=""><span class="icon-linkedin"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection