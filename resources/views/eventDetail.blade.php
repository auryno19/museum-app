@extends('layouts.main')
@section('main')
    <section class="p-5">
        <div class="my-5 pt-5 text-center">
            @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                <h1>{{ $event->title_id }}</h1>
            @else
                <h1>{{ $event->title_eng }}</h1>
            @endif

        </div>
        <div class="p-5 pt-0 mt-5">
            @if ($event->Image->count() > 1)
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        @foreach ($event->Image as $image)
                            <div class="carousel-item {{ $event->Image->first() == $image ? 'active' : '' }}">
                                <img src="{{ asset('images/image-event/' . $image->filepath) }}" class="d-block w-100"
                                    height="500vh" style="object-fit: cover" alt="image {{ $event->title_eng }}">
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            @else
                <div class="px-3">
                    @if ($event->Image->count())
                        <img src="{{ asset('images/image-event/' . $event->Image[0]->filepath) }}"
                            alt="{{ $event->title_eng }}" width="100%" height="400px"
                            style="object-fit: cover; border-radius: 10px">
                    @else
                        <img src="{{ asset('images/default.jpg') }}" alt="{{ $event->title_eng }}" width="100%"
                            height="400px" style="object-fit: cover; border-radius: 10px">
                    @endif
                </div>
            @endif
        </div>
        <div>
            <div class="p-5 mx-5">
                <div class="fs-4">
                    <p>{{ \Carbon\Carbon::parse($event->date)->format('d M Y') }}</p>
                </div>
                @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                    <div class="fs-5" style="text-align: justify">
                        @foreach (preg_split('/<\?p>/', $event->deskripsi_id) as $paragraph)
                            @if (!empty($paragraph))
                                <div class="">

                                    <p>{!! $paragraph !!}</p>
                                </div>
                            @endif
                        @endforeach


                    </div>
                @else
                    <div class="fs-5" style="text-align: justify">
                        @foreach (preg_split('/<\?p>/', $event->deskripsi_eng) as $paragraph)
                            @if (!empty($paragraph))
                                <div class="">

                                    <p>{!! $paragraph !!}</p>
                                </div>
                            @endif
                        @endforeach


                    </div>
                @endif
            </div>
        </div>


    </section>
@endsection
