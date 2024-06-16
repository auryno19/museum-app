@extends('layouts.main')
@section('main')
    <section>
        <div class="jumbotron">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/image-collection/kantor_koneng.jpg') }}" class="d-block w-100"
                            height="500vh" style="object-fit: cover" alt=" gambar rumah koneng">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('images/image-collection/pendopo.jpg') }}" class="d-block w-100"
                            height="500vh" style="object-fit: cover" alt=" gambar pendopo">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('images/image-collection/rumah_panyepen.jpg') }}" class="d-block w-100"
                            height="500vh" style="object-fit: cover" alt=" gambar rumah panyepen">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('images/image-collection/labeng_mesem.jpg') }}" class="d-block w-100"
                            height="500vh" style="object-fit: cover" alt=" gambar labeng mesem">
                    </div>
                    <div class="carousel-item ">
                        <img src="{{ asset('images/image-collection/tamansare5.jpg') }}" class="d-block w-100"
                            height="500vh" style="object-fit: cover" alt=" gambar taman sare">
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="p-5">
            <div class="row">
                <div class="col-sm-4 text-center p-3 my-auto">
                    <h1>@lang('public.about')</h1>
                </div>
                <div class="col-sm-8">
                    <div class="list-section">
                        <a class="list-section-link" href="/definition">
                            <i class="fa-solid fa-landmark me-4"></i>@lang('public.definition')
                        </a>
                    </div>
                    <div class="list-section">
                        <a class="list-section-link" href="/history">
                            <i class="fa-solid fa-box-archive me-4"></i>@lang('public.history')
                        </a>
                    </div>
                    <div class="list-section">
                        <a class="list-section-link" href="/location">
                            <i class="fa-solid fa-location-dot me-4"></i>@lang('public.location')
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <hr>
    <section class="service">
        <div class="p-5">
            <div class="row">

                <div class="col-sm-8 text-end">
                    <div class="list-section">
                        <a class="list-section-link" href="">
                            @lang('public.time')<i class="fa-solid fa-calendar-days ms-4"></i>
                        </a>
                    </div>
                    <div class="list-section">
                        <a class="list-section-link" href="">
                            @lang('public.tour')<i class="fa-solid fa-monument ms-4"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 text-center p-3 my-auto">
                    <h1>@lang('public.service')</h1>
                </div>
            </div>
        </div>
    </section>

    {{-- <hr> --}}

    {{-- <section id="collection">
        <div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
            <div class="carousel-inner w-100">
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="https://via.placeholder.com/640x360?text=1">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="https://via.placeholder.com/640x360?text=2">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="https://via.placeholder.com/640x360?text=3">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="https://via.placeholder.com/640x360?text=4">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="https://via.placeholder.com/640x360?text=5">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="https://via.placeholder.com/640x360?text=6">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="https://via.placeholder.com/640x360?text=7">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="col-md-4">
                        <div class="card card-body">
                            <img class="img-fluid" src="https://via.placeholder.com/640x360?text=8">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </section> --}}

    {{-- <section id="agenda"> --}}

    {{-- </section> --}}
    {{-- <script>
        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script> --}}
@endsection
