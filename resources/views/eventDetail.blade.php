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
            <div class="px-3">
                <img src="{{ asset('images/image-event/' . $event->image) }}"
                    alt="{{ $event->title_eng }}" width="100%" height="400px"
                    style="object-fit: cover; border-radius: 10px">
            </div>
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
