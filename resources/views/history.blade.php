@extends('layouts.main')
@section('main')
    <section>
        <div class="container p-5 mt-5">
            <div class="row">
                <div class="col-md-6 p-3 my-auto">
                    <h1>
                        @lang('public.history')
                    </h1>
                    <hr style="width: 100%; border:1px solid #133013; ">
                    <p class="mt-3 me-5" style="text-align: justify">
                        @lang('public.history.header')

                    </p>
                </div>
                <div class="col-md-6 p-3">
                    <img src="{{ 'images/image-collection/lambangkerajaan.jpg' }}" alt="gambar museum"
                        style="width: 90%; height: 500px; object-fit:cover; border-radius: 15px">
                </div>
            </div>
        </div>
    </section>
    <hr style="width: 90%">
    <section>
        <div class="container p-5 pb-0 mb-5">
            <h2>
                @lang('public.history.title')
            </h2>
            <p class="fs-5" style="text-align: justify">
                @lang('public.history.desc')
            </p>
        </div>
     

@endsection
