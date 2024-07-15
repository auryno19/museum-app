@extends('layouts.main')
@section('main')
    <section>
        <div class="container py-5 px-3">
            <div class="mt-5 mb-3 pt-5 text-start">
                <h1>@lang('public.visiting_info')</h1>
                <h2>Museum Keraton</h2>
            </div>
            <hr style="margin-left: 0; width:40%;">
            <div class="p-3">
                <div class="row g-5">
                    <div class="col-md-6 p-3" style="border-right: 2px solid rgba(9, 45, 9, 0.495)">
                        <h3><i class="fa-regular fa-clock"></i>
                            @lang('public.time_op')
                        </h3>
                        <div class="row mt-4">
                            <div class="col-md-5">
                                <h5 class="text-bold">@lang('public.monday')</h5>
                                <h5 class="text-bold">@lang('public.tuesday')</h5>
                                <h5 class="text-bold">@lang('public.wednesday')</h5>
                                <h5 class="text-bold">@lang('public.thursday')</h5>
                                <h5 class="text-bold">@lang('public.friday')</h5>
                                <h5 class="text-bold text-white">-</h5>
                                <h5 class="text-bold text-white">-</h5>
                                <h5 class="text-bold">@lang('public.saturday')</h5>
                                {{-- <p>09.00 - 15.00 WIB</p> --}}
                            </div>
                            <div class="col-md-6">
                                @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                                    <h5 class="text-bold">07.30 - 16.00 WIB</h5>
                                    <h5 class="text-bold">07.30 - 16.00 WIB</h5>
                                    <h5 class="text-bold">07.30 - 16.00 WIB</h5>
                                    <h5 class="text-bold">07.30 - 16.00 WIB</h5>
                                    <h5 class="text-bold">07.00 - 11.00 WIB</h5>
                                    <h5 class="text-bold">@lang('public.break')</h5>
                                    <h5 class="text-bold">13.00 - 16.00 WIB</h5>
                                    <h5 class="text-bold">07.30 - 16.00 WIB</h5>
                                @else
                                    <h5 class="text-bold">07.30 AM - 04.00 PM</h5>
                                    <h5 class="text-bold">07.30 AM - 04.00 PM</h5>
                                    <h5 class="text-bold">07.30 AM - 04.00 PM</h5>
                                    <h5 class="text-bold">07.30 AM - 04.00 PM</h5>
                                    <h5 class="text-bold">07.00 AM - 11.00 AM</h5>
                                    <h5 class="text-bold">@lang('public.break')</h5>
                                    <h5 class="text-bold">13.00 AM - 04.00 PM</h5>
                                    <h5 class="text-bold">07.30 AM - 04.00 PM</h5>
                                @endif
                                {{-- <p>09.00 - 14.00 WIB</p> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-3 px-5">
                        <h3 class="">
                            <i class="fa-solid fa-ticket"></i>
                            @lang('public.ticket')
                        </h3>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h5><i class="fa-solid fa-school me-2"></i>
                                    @lang('public.student')
                                </h5>
                            </div>
                            <div class="col-md-6 ">
                                <h5>
                                    Rp 6.000,-
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5><i class="fa-solid fa-person me-2"></i>
                                    @lang('public.reguler')
                                </h5>
                            </div>
                            <div class="col-md-6 ">
                                <h5>
                                    Rp 10.000,-
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>
                                    <i class="fa-solid fa-plane me-2"></i>
                                    @lang('public.foreigner')
                                </h5>
                            </div>
                            <div class="col-md-6 ">
                                <h5>
                                    Rp 20.000,-
                                </h5>
                            </div>
                        </div>
                        <small>@lang('public.warning')</small>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-md-6 p-3">
                        <h3><i class="fa-solid fa-building-user"></i></i>
                            @lang('public.facilities')
                        </h3>
                        @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                            <div class="row mt-4">
                                <ul>
                                    <li>
                                        Didampingi oleh pemandu wisata/pemandu museum
                                    </li>
                                    <li>Toilet</li>
                                    <li>Musholla</li>
                                    <li>
                                        Tempat istirahat dan bersantai
                                    </li>
                                    <li>
                                        Gratis minuman botol untuk pengemudi bus pariwisata yang membawa rombongan
                                    </li>
                                </ul>
                            </div>
                        @else
                            <div class="row mt-4">
                                <ul>
                                    <li>
                                        Accompanied by a tour guide/museum guide
                                    </li>
                                    <li>Toilet</li>
                                    <li>Musholla</li>
                                    <li>
                                        A place to rest and relax
                                    </li>
                                    <li>
                                        Free bottled drinks for tour bus drivers carrying groups
                                    </li>
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
