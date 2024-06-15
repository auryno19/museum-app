@extends('layouts.main')
@section('main')
    <section>
        <div class="container p-5 mt-5">
            <div class="row mt-5">
                <div class="col-md-6 p-2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15840.039561709404!2d113.8628659!3d-7.0081176!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e42b1170c777%3A0x392c4cc621a3b3cd!2sMuseum%20Keraton%20Sumenep!5e0!3m2!1sid!2sid!4v1716711906983!5m2!1sid!2sid"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6 p-2 ps-5">
                    <div class="mb-5">
                        <h1>@lang('public.contact')</h1>
                    </div>
                    <div class="mb-3">
                        <h3>
                            @lang('public.addres')
                        </h3>
                        <p>Jl. Dr. Sutomo No.6, Lingkungan Delama, Pajagalan, Kec. Kota Sumenep, Kabupaten Sumenep, Jawa Timur 69416</p>
                    </div>
                    <div class="mb-3">
                        <h3>
                            Email
                        </h3>
                        <p>museumkeraton@gmail.com</p>
                    </div>
                    <div class="mb-3">
                        <h3>
                            @lang('public.phone')
                        </h3>
                        <p>084375378548</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
