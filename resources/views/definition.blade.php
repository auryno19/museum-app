@extends('layouts.main')
@section('main')
    <section>
        <div class="container p-5 mt-5">
            <div class="text-center mt-5">
                <h1>{{ strtoupper(__('public.definition')) }}</h1>

            </div>
            <div class="p-3 mt-5">
                <img src="{{ 'images/image-collection/mesem2.jpg' }}" alt="gambar museum"
                    style="width: 100%; height: 500px; object-fit:cover; border-radius: 15px">
            </div>
            <div class="p-5 mt-3" style="text-align: justify">
                <p class="fs-4">
                    @lang('public.definition.desc')

                </p>

            </div>
        </div>
    </section>
@endsection
