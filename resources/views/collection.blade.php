@extends('layouts.main')
@section('main')
    <section class="p-5 mt-5">
        <div class="mt-5 text-center">
            <h1>{{ strtoupper(__('public.collection')) }}</h1>
        </div>
        <div class="p-5 mt-2">
            <div class="row">
                @foreach ($covers as $cover)
                <div class="col-md-5 col-lg-4 pt-2 mb-5">
                    <div class="card" style="height: 70vh !important;">
                        <a href="/collection/{{ $cover->id }}/{{ Str::slug(Session::get('locale') == 'in' || Session::get('locale') == 'id' ? $cover->title_id : $cover->title_eng ) }}">
                            <img src="{{ 'images/image-collection/' . $cover->filepath }}" style="object-fit: cover" class="card-img-top" height="350px"
                            alt="Image {{ $cover->title_eng }}">
                            <div class="card-body">
                                @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                                <h5 class="fs-3 mt-2">{{ ucwords($cover->title_id) }}</h5>
                                @else
                                <h5 class="fs-3 mt-2">{{ ucwords($cover->title_eng) }}</h5>
                                @endif
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $covers->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
