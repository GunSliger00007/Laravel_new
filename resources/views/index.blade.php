<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Bootstrap 5.0 HTML Template</title>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/templatemo-style.css') }}">

    <!--

    TemplateMo 556 Catalog-Z

    https://templatemo.com/tm-556-catalog-z

    -->
</head>
<body>
<!-- Page Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fas fa-film mr-2"></i>
            Catalog-Z
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link nav-link-1 active" aria-current="page" href="{{route('home')}}">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-2" href="{{route('video-detail')}}">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-3" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-4" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="tm-hero d-flex justify-content-center align-items-center" data-parallax="scroll" data-image-src="img/hero.jpg">
    <form class="d-flex tm-search-form">
        <input class="form-control tm-search-input" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success tm-search-btn" type="submit">
            <i class="fas fa-search"></i>
        </button>
    </form>
</div>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-6 tm-text-primary">
            Latest Photos
        </h2>
        <div class="col-6 d-flex justify-content-end align-items-center">
            <form action="" class="tm-text-primary">
                Page <input type="text" value="1" size="1" class="tm-input-paging tm-text-primary"> of 200
            </form>
        </div>
    </div>
    <div class="row tm-mb-90 tm-gallery">
        @php
            $items = [
                ['img' => 'img-03.jpg', 'title' => 'Clocks', 'date' => '18 Oct 2020', 'views' => '9,906'],
                ['img' => 'img-04.jpg', 'title' => 'Plants', 'date' => '14 Oct 2020', 'views' => '16,100'],
                ['img' => 'img-05.jpg', 'title' => 'Morning', 'date' => '12 Oct 2020', 'views' => '12,460'],
                ['img' => 'img-06.jpg', 'title' => 'Pinky', 'date' => '10 Oct 2020', 'views' => '11,402'],
                ['img' => 'img-01.jpg', 'title' => 'Hangers', 'date' => '24 Sep 2020', 'views' => '16,008'],
                ['img' => 'img-02.jpg', 'title' => 'Perfumes', 'date' => '20 Sep 2020', 'views' => '12,860'],
                ['img' => 'img-07.jpg', 'title' => 'Bus', 'date' => '16 Sep 2020', 'views' => '10,900'],
                ['img' => 'img-08.jpg', 'title' => 'New York', 'date' => '12 Sep 2020', 'views' => '11,300'],
                ['img' => 'img-09.jpg', 'title' => 'Abstract', 'date' => '10 Sep 2020', 'views' => '42,700'],
                ['img' => 'img-10.jpg', 'title' => 'Flowers', 'date' => '8 Sep 2020', 'views' => '11,402'],
                ['img' => 'img-11.jpg', 'title' => 'Rosy', 'date' => '4 Sep 2020', 'views' => '32,906'],
                ['img' => 'img-12.jpg', 'title' => 'Rocki', 'date' => '28 Aug 2020', 'views' => '50,700'],
                ['img' => 'img-13.jpg', 'title' => 'Purple', 'date' => '22 Aug 2020', 'views' => '107,510'],
                ['img' => 'img-14.jpg', 'title' => 'Sea', 'date' => '14 Aug 2020', 'views' => '118,006'],
                ['img' => 'img-15.jpg', 'title' => 'Turtle', 'date' => '9 Aug 2020', 'views' => '99,999'],
            ];
        @endphp

        @foreach($items as $item)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
                <figure class="effect-ming tm-video-item">
                    <img src="{{ asset('assets/frontend/img/' . $item['img']) }}" alt="{{ $item['title'] }}" class="img-fluid">
                    <figcaption class="d-flex align-items-center justify-content-center">
                        <h2>{{ $item['title'] }}</h2>
                        <a href="{{ url('photo-detail') }}">View more</a>
                    </figcaption>
                </figure>
                <div class="d-flex justify-content-between tm-text-gray">
                    <span class="tm-text-gray-light">{{ $item['date'] }}</span>
                    <span>{{ $item['views'] }} views</span>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row tm-mb-90">
        <div class="col-12 d-flex justify-content-between align-items-center tm-paging-col">
            <a href="javascript:void(0);" class="btn btn-primary tm-btn-prev mb-2 disabled">Previous</a>
            <div class="tm-paging d-flex">
                <a href="javascript:void(0);" class="active tm-paging-link">1</a>
                <a href="javascript:void(0);" class="tm-paging-link">2</a>
                <a href="javascript:void(0);" class="tm-paging-link">3</a>
                <a href="javascript:void(0);" class="tm-paging-link">4</a>
            </div>
            <a href="javascript:void(0);" class="btn btn-primary tm-btn-next">Next Page</a>
        </div>
    </div>
</div> <!-- container-fluid, tm-container-content -->

<footer class="tm-bg-gray pt-5 pb-3 tm-text-gray tm-footer">
    <div class="container-fluid tm-container-small">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12 px-5 mb-5">
                <h3 class="tm-text-primary mb-4 tm-footer-title">About Catalog-Z</h3>
                <p>Catalog-Z is free <a rel="sponsored" href="https://v5.getbootstrap.com/">Bootstrap 5</a> Alpha 2 HTML Template for video and photo websites. You can freely use this TemplateMo layout for a front-end integration with any kind of CMS website.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                <h3 class="tm-text-primary mb-4 tm-footer-title">Our Links</h3>
                <ul class="tm-footer-links pl-0">
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Support</a></li>
                    <li><a href="#">Our Company</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 px-5 mb-5">
                <ul class="tm-social-links d-flex justify-content-end pl-0 mb-5">
                    <li class="mb-2"><a href="https://facebook.com"><i class="fab fa-facebook"></i></a></li>
                    <li class="mb-2"><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    <li class="mb-2"><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
                    <li class="mb-2"><a href="https://pinterest.com"><i class="fab fa-pinterest"></i></a></li>
                </ul>
                <a href="#" class="tm-text-gray text-right d-block mb-2">Terms of Use</a>
                <a href="#" class="tm-text-gray text-right d-block">Privacy Policy</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-7 col-12 px-5 mb-3">
                Copyright 2020 Catalog-Z Company. All rights reserved.
            </div>
            <div class="col-lg-4 col-md-5 col-12 px-5 text-right">
                Designed by <a href="https://templatemo.com" class="tm-text-gray" rel="sponsored" target="_parent">TemplateMo</a>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('assets/frontend/js/plugins.js')}}"></script>
<script>
    $(window).on("load", function() {
        $('body').addClass('loaded');
    });
</script>
</body>

