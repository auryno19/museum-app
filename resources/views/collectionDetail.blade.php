@extends('layouts.main')
@section('main')
    <section class="p-5">
        <div class="my-5 pt-5 text-center">
            @if ($cover->id == '11' || $cover->id == '12')
                @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                    <h1>{{ $cover->title_id }}</h1>
                @else
                    <h1>{{ $cover->title_eng }}</h1>
                @endif
            @else
                @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                    <h1>{{ $collection[0]->title_id }}</h1>
                @else
                    <h1>{{ $collection[0]->title_eng }}</h1>
                @endif
            @endif
        </div>
        @if ($cover->id == '11')
            <div class="p-5 pt-0 mb-3">
                <div class="fs-5" style="text-align: justify">
                    @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                        Benda-benda peralatan upacara berupa satu set pekinangan, kacip, kecohan, tempat penyimpanan
                        tembakau
                        dan kapur, dan kendi tersebut dapat sebagai benda pribadi milik keluarga Keraton Sumenep maupun
                        keturnannya yang kemudian dijadikan sebagai koleksi Museum Keraton Sumenep. Keberadaan peralatan
                        upacara
                        sebagai bagian dari koleksi Museum Keraton Sumenep dapat menjadi bukti yang menggambarkan tentang
                        kehidupan sosial kebudayan yang berkembang di wilayah Sumenep berupa adanya tradisi menginang maupun
                        tradisi upacara-upacara tertentu yang menggunakan peralatan upacara termasuk kendi.
                    @else
                        English Benda-benda peralatan upacara berupa satu set pekinangan, kacip, kecohan, tempat penyimpanan
                        tembakau
                        dan kapur, dan kendi tersebut dapat sebagai benda pribadi milik keluarga Keraton Sumenep maupun
                        keturnannya yang kemudian dijadikan sebagai koleksi Museum Keraton Sumenep. Keberadaan peralatan
                        upacara
                        sebagai bagian dari koleksi Museum Keraton Sumenep dapat menjadi bukti yang menggambarkan tentang
                        kehidupan sosial kebudayan yang berkembang di wilayah Sumenep berupa adanya tradisi menginang maupun
                        tradisi upacara-upacara tertentu yang menggunakan peralatan upacara termasuk kendi.
                    @endif

                </div>
                <div class="p-5">
                    @foreach ($cover->Collection as $c)
                        <div class="row mb-5">
                            <div class="col-md-5">
                                <img src="{{ asset('images/image-collection/' . $c->Image[0]->filepath) }}"
                                    alt="{{ $c->title_eng }}" width="100%" height="350px"
                                    style="object-fit: cover; border-radius: 10px">
                            </div>
                            <div class="col-md-7 my-auto">
                                <div class="fs-3 font-weight-bold mb-3">
                                    @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                                        {{ $c->title_id }}
                                    @else
                                        {{ $c->title_eng }}
                                    @endif
                                </div>
                                <div class="fs-6" style="text-align: justify">
                                    @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                                        @foreach (preg_split('/<\?p>/', $c->desc_id) as $paragraph)
                                            @if (!empty($paragraph))
                                                <div class="">

                                                    <p>{!! $paragraph !!}</p>
                                                </div>
                                            @endif
                                        @endforeach
                                    @else
                                        @foreach (preg_split('/<\?p>/', $c->desc_eng) as $paragraph)
                                            @if (!empty($paragraph))
                                                <div class="">

                                                    <p>{!! $paragraph !!}</p>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        @elseif($cover->id == '12')
            <div class="p-5 pt-0 mt-5">
                <div class="px-3">
                    <img src="{{ asset('images/image-collection/' . $cover->Collection[0]->Image[0]->filepath) }}"
                        alt="{{ $cover->title_eng }}" width="100%" height="500vh" style="object-fit: cover">
                </div>
                <div class="p-5">
                    @foreach ($cover->Collection as $c)
                        <div class="fs-3 font-weight-bold mb-3">
                            @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                                {{ $c->title_id }}
                            @else
                                {{ $c->title_eng }}
                            @endif
                        </div>
                        <div class="fs-6 mb-5" style="text-align: justify">
                            @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                                @foreach (preg_split('/<\?p>/', $c->desc_id) as $paragraph)
                                    @if (!empty($paragraph))
                                        <div class="">

                                            <p>{!! $paragraph !!}</p>
                                        </div>
                                    @endif
                                @endforeach
                            @else
                                @foreach (preg_split('/<\?p>/', $c->desc_eng) as $paragraph)
                                    @if (!empty($paragraph))
                                        <div class="">

                                            <p>{!! $paragraph !!}</p>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="p-5 pt-0 mt-5">
                <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        @foreach ($collection[0]->Image as $image)
                            <div class="carousel-item {{ $collection[0]->Image->first() == $image ? 'active' : '' }}">
                                <img src="{{ asset('images/image-collection/' . $image->filepath) }}" class="d-block w-100"
                                    height="500vh" style="object-fit: cover" alt="image {{ $collection[0]->title_eng }}">
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
            </div>
            <div>
                <div class="p-5 mx-5">
                    @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                        <div class="fs-5" style="text-align: justify">
                            @foreach (preg_split('/<\?p>/', $collection[0]->desc_id) as $paragraph)
                                @if (!empty($paragraph))
                                    <div class="">

                                        <p>{!! $paragraph !!}</p>
                                    </div>
                                @endif
                            @endforeach


                        </div>
                    @else
                        <div class="fs-5" style="text-align: justify">
                            @foreach (preg_split('/<\?p>/', $collection[0]->desc_eng) as $paragraph)
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
        @endif

    </section>
@endsection
