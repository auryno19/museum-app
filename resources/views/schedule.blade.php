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
                            <div class="col-md-6">
                                <h4 class="text-bold">@lang('public.monday') - @lang('public.thursday')</h4>
                                <p>09.00 - 15.00 WIB</p>
                            </div>
                            <div class="col-md-6">
                                <h4 class="text-bold">@lang('public.saturday') - @lang('public.sunday')</h4>
                                <p>09.00 - 14.00 WIB</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-3 px-5">
                        <h3 class="">
                            <i class="fa-solid fa-ticket"></i>
                            @lang('public.ticket')
                        </h3>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <h5><i class="fa-solid fa-school me-2"></i>
                                    @lang('public.student')
                                </h5>
                            </div>
                            <div class="col-md-6 ">
                                <h5>
                                    Rp. 2000,-
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h5><i class="fa-solid fa-person me-2"></i>
                                    @lang('public.reguler')
                                </h5>
                            </div>
                            <div class="col-md-6 ">
                                <h5>
                                    Rp. 3000,-
                                </h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>
                                    <i class="fa-solid fa-plane me-2"></i>
                                    @lang('public.foreigner')
                                </h5>
                            </div>
                            <div class="col-md-6 ">
                                <h5>
                                    Rp. 10.000,-
                                </h5>
                            </div>
                        </div>
                        <small>*@lang('public.warning')</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
