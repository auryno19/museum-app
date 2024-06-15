@extends('layouts.main')
@section('main')
    <section>
        <div class="container p-5">
            <div class="p-3 pt-5 mt-5">
                @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                <h1>Bangunan Bangunan Museum</h1>
                @else
                <h1>Museum Building</h1>
                @endif
            </div>
            <div class="row my-3 py-4">
                <div class="col-sm-4">
                    <img src="{{ asset('images/image-collection/labeng_mesem.jpg') }}" alt="labeng mesem" width="100%"
                        height="300vh" style="object-fit: cover; border-radius: 10px">
                </div>
                <div class="col-sm-8 my-auto ps-5">
                    <h3>
                        Labeng Mesem
                    </h3>
                    <p style="text-align: justify">
                        @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                            Labang Mesem terletak di sisi kiri istana. Ini adalah gerbang besar dengan gaya Eropa. Gerbang
                            ini akses jalan untuk masuk ke Pendopo (aula pertemuan), Istana Museum Sumenep, dan jalan menuju
                            ke Taman sare.
                        @else
                            Labang Mesem is located to the left of the palace. It is a large gate with European-style
                            architecture. This gate serves as the entrance to the Pendopo (meeting hall), the Sumenep Palace
                            Museum, and the pathway to the Taman Sare.
                        @endif

                    </p>
                </div>
            </div>
            <hr>
            <div class="row my-3 py-4">
                <div class="col-sm-4">
                    <iframe width="100%" height="300"
                        src="https://www.youtube.com/embed/RwgSBaoMbFs?si=vL3QtE-y0HYWJNe7" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-sm-8 my-auto ps-5">
                    <h3>
                        Judul
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat soluta ex magnam, a vero
                        architecto laborum odio illo dolor nemo iure omnis, numquam perspiciatis quod labore quisquam! Porro
                        ea vitae a deserunt, unde eos velit.
                    </p>
                </div>
            </div>
            <hr>
            <div class="row my-3 py-4">
                <div class="col-sm-4">
                    <iframe width="100%" height="300"
                        src="https://www.youtube.com/embed/RwgSBaoMbFs?si=vL3QtE-y0HYWJNe7" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-sm-8 my-auto ps-5">
                    <h3>
                        Judul
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat soluta ex magnam, a vero
                        architecto laborum odio illo dolor nemo iure omnis, numquam perspiciatis quod labore quisquam! Porro
                        ea vitae a deserunt, unde eos velit.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
