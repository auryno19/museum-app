@extends('layouts.main')
@section('main')
    <section>
        <div class="container p-5">

            <div class="p-3 pt-5 mt-5 text-center">
                @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                    <h1>Bangunan Bangunan Museum</h1>
                @else
                    <h1>Museum Building</h1>
                @endif
            </div>
            <div class="p-3 pt-5">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/image-collection/tamansare.jpg') }}" class="d-block w-100"
                                height="500vh" style="object-fit: cover" alt=" gambar taman sare">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('images/image-collection/tamansare2.jpg') }}" class="d-block w-100"
                                height="500vh" style="object-fit: cover" alt=" gambar taman sare">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('images/image-collection/tamansare3.jpg') }}" class="d-block w-100"
                                height="500vh" style="object-fit: cover" alt=" gambar taman sare">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('images/image-collection/tamansare4.jpg') }}" class="d-block w-100"
                                height="500vh" style="object-fit: cover" alt=" gambar taman sare">
                        </div>
                        <div class="carousel-item ">
                            <img src="{{ asset('images/image-collection/tamansare5.jpg') }}" class="d-block w-100"
                                height="500vh" style="object-fit: cover" alt=" gambar taman sare">
                        </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="p-5 mt-3 text-center">
                    <h3> 
                        ⁠Taman Sare
                    </h3>
                    <p style="text-align: justify">
                        @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                            Taman Sare merupakan taman dengan kolam kecil yang airnya keluar dari pangkalan. Taman Sare
                            adalah taman yang sangat menarik pada saat itu. Pasalnya, tempat ini dilengkapi dengan tiga buah
                            pemandian yang sebelumnya digunakan oleh Ratu dan putri Adipati. Konon katanya setiap pemandian
                            tersebut memiliki berbagai macam khasiat yang didapat jika membasuh badan atau wajah dengan air
                            tersebut.
                        @else
                            Taman Sare is a garden with a small pool where water flows from a spring. Taman Sare was a very
                            attractive garden at the time because it featured three bathing pools used by the queen and the
                            duke's daughters. Each pool was believed to have various benefits for those who washed their
                            bodies or faces with its water.
                        @endif

                    </p>
                </div>
            </div>
            <hr>
            <div>
                <div class="row my-3">
                    <div class="text-center py-3">

                        <h3>
                            @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                                Pendopo (tempat pertemuan)
                            @else
                                Pendopo (Meeting Hall)
                            @endif
                        </h3>
                    </div>
                    <div class="col sm 6">
                        <img src="{{ asset('images/image-collection/pendopo.jpg') }}" alt="pendopo" width="100%"
                        height="300vh" style="object-fit: cover; border-radius: 10px">
                    </div>
                    <div class="col sm 6">
                        <img src="{{ asset('images/image-collection/pendopo2.jpg') }}" alt="pendopo" width="100%"
                        height="300vh" style="object-fit: cover; border-radius: 10px">
                    </div>
                    <div class="py-5">
                        <p style="text-align: center" class="fs-5">
                            @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                                Pendopo (tempat pertemuan) merupakan sebuah ruangan di tengah kompleks keraton yang digunakan
                                untuk pertemuan. Ini adalah bangunan sederhana namun khas yang didekorasi dengan gaya yang
                                indah.
                            @else
                                The Pendopo is a room in the center of the palace complex used for meetings. It is a simple yet
                                characteristic building decorated in a beautiful style.
                            @endif
    
                        </p>
                    </div>
                </div>
            </div>
            <hr>
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
                <div class="col-sm-8 my-auto ps-5">
                    <h3 class="text-end">
                        @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                            Kantor Koneng
                        @else
                            Koneng Office
                        @endif
                    </h3>
                    <p style="text-align: justify">
                        @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                            Gedung Koneng atau Kantor Koneng memiliki pengertian sebagai ruang kerja, merupakan bagian
                            bangunan yang berada di dalam kompleks Museum Keraton Sumenep.
                            Bangunan ini berada di sebelah barat dari kompleks keraton. Kantor Koneng saat ini difungsikan
                            sebagai ruang penyimpanan dan pameran induk museum. Dahulu kala ruangan ini digunakan untuk para
                            Raja Sumenep sebagai tempat kerja mereka. Beberapa benda bersejarah yang terdapat di bagian ini
                            yaitu alat-alat musik tradisional Sumenep, benda-benda keramik, keris, perlengkapan peperangan,
                            benda-benda arkeologi, dan perlengkapan rumah tangga kerajaan seperti mangkok, piring, sendok,
                            dan masih banyak lagi.
                        @else
                            The Koneng Office, also known as the Yellow Office, served as a workspace and is part of the
                            building complex within the Sumenep Palace Museum. It is located on the western side of the
                            palace complex. Today, the Koneng Office is used as the main storage and exhibition room for the
                            museum. Historically, this room was used by the Kings of Sumenep as their workspace. This
                            section houses several historical items such as traditional Sumenep musical instruments,
                            ceramics, krises (traditional Javanese daggers), war equipment, archaeological items, and royal
                            household items like bowls, plates, spoons, and more.
                        @endif

                    </p>
                </div>
                <div class="col-sm-4">
                    <img src="{{ asset('images/image-collection/kantor_koneng.jpg') }}" alt="kantor koneng" width="100%"
                        height="300vh" style="object-fit: cover; border-radius: 10px">
                </div>
             
            </div>
            <hr>
            <div class="row my-3 py-4">
                <div class="col-sm-4">
                    <img src="{{ asset('images/image-collection/rumah_panyepen.jpg') }}" alt="rumah penyepen" width="100%"
                        height="300vh" style="object-fit: cover; border-radius: 10px">
                </div>
                <div class="col-sm-8 my-auto ps-5">
                    <h3>
                        @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                            Rumah Penyepen
                        @else
                            Penyepen House
                        @endif
                    </h3>
                    <p style="text-align: justify">
                        @if (Session::get('locale') == 'in' || Session::get('locale') == 'id')
                            Rumah Penyepen Raja berada di sebelah barat Keraton Sumenep yang saat ini difungsikan sebagai
                            ruang koleksi Museum Keraton Sumenep atau disebut dengan Museum Keraton Sumenep III. Koleksi
                            yang terdapat di lokasi museum ketiga adalah beberapa perangkat kursi, tempat tidur, cermin
                            besar, buffet, gamparan, stempel kerajaan, alat penyaring air, sendok keramik, wayang golek,
                            wayang kulit, fosil (tulang tangan ikan duyung, gigi gajah, kerang, kayu, dan batu), pakaian
                            Raja dan Putri, sarung, dan sajadah dari kulit macan .
                        @else
                            The Penyepen House, located on the west side of the Sumenep Palace, is currently used as a
                            collection room for the Sumenep Palace Museum, also known as Museum Keraton Sumenep III. The
                            collection in this third museum includes various items such as chairs, beds, large mirrors,
                            buffets, gamparan (traditional footwear), royal seals, water filters, ceramic spoons, wooden
                            puppets, leather puppets, fossils (including dugong bones, elephant teeth, shells, wood, and
                            stones), the clothes of the king and princess, sarongs, and tiger skin prayer rugs.
                        @endif

                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
