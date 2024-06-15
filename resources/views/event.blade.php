@extends('layouts.main')
@section('main')
    <section class="p-5 mt-5">
        <div class="mt-5 text-center">
            <h1>{{ strtoupper(__('public.event')) }}</h1>
        </div>
        <div class="p-5 mt-2">
            <div class="row">
                @foreach ($events as $event)
                    
                <div class="col-md-5 col-lg-4 pt-2 mb-5">
                    <div class="card" style="height: 70vh;">
                        <a href="/event/{{ $event->id }}/{{ Str::slug(Session::get('locale') == 'in' || Session::get('locale') == 'id' ? $event->title_id : $event->title_eng ) }}">
                            <img src="{{ 'images/image-event/' . $event->image }}" style="object-fit: cover" class="card-img-top"
                                height="350px" alt="event {{ $event->title_eng }}">
                            <div class="card-body">

                                <span><small>{{ \Carbon\Carbon::parse($event->date)->format('d M Y')  }}</small></span>
                                @if (Session::get('locale') == 'id' || Session::get('locale') == 'in')
                                <h4 class="fs-2 mt-2">{{ ucwords($event->title_id) }}</h4>
                                @else
                                <h4 class="fs-2 mt-2">{{ ucwords($event->title_eng) }}</h4>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
