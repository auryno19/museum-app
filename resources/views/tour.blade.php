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
                        Taman Sare merupakan sumber mata air yang hingga saat ini dipercaya digunakan sebagai tempat mandi para keluarga keraton. Lokasi Taman Sare berada di sisi timur Labang Mesem. Taman Sare dibangun bersamaan dengan Keraton Sumenep sekitar tahun 1762. Taman Sare dikelilingi tembok benteng yang tinggi dan tebal yang berfungsi sebagai pelindung.
                        <br><br>
                        Menurut tutur yang berkembang, Taman Sare digunakan sebagai pemandian keluarga keraton, namun hal ini tidak tepat. Taman Sare sebenarnya merupakan tempat sumber mata air yang mengalir ke arah selatan. Faktanya, Taman Sare dibangun karena keraton harus dekat dengan sumber mata air. Dapat disimpulkan bahwa Taman Sare bukanlah tempat pemandian para putri, selir, atau permaisuri sultan, melainkan sebuah sumber mata air.
                        <br><br>
                        Di kolam Taman Sare terdapat 3 pintu, setiap pintu dipercaya memiliki keutamaan masing-masing. Pintu pertama memiliki keterangan bahwa melintasinya dipercaya dapat membuat pengunjung terlihat awet muda, serta dimudahkan dalam mendapatkan jodoh dan keturunan. Pintu kedua diyakini dapat meningkatkan karir atau jabatan seseorang. Pintu terakhir atau pintu ketiga diyakini dapat meningkatkan kereligiusan orang yang melintasinya menuju kolam.
                        <br><br>
                        Penjelasan tentang Taman Sare ini menjelaskan bahwa sebenarnya Taman Sare bukan tempat pemandian atau tempat mandi, melainkan sebagai sumber mata air yang penting bagi Keraton Sumenep.
                        @else
                        Taman Sare is a spring that has long been believed to be used as a bathing place for the royal family. Located on the eastern side of Labang Mesem, Taman Sare was constructed concurrently with Keraton Sumenep around 1762. It is surrounded by high and thick fortress walls serving as protection. 
                        <br><br>
                        Contrary to popular belief, Taman Sare actually is not a bathing place for the royal family but rather a natural spring flowing southward. It was built because the palace needed proximity to a water source. Therefore, Taman Sare should be understood not as a bathing place for princesses, concubines, or the queen but as a spring water source.
                        <br><br>
                        Within the pool of Taman Sare are three gates, each believed to possess distinct virtues. The first gate grants visitors eternal youth and facilitates finding a spouse and offspring. The second gate is believed to enhance a career or position. The third gate, known as the last gate, is thought to elevate the religious devotion of those passing through towards the pool. 
                        <br><br>
                        The explanation of Taman Sare clarifies that it is not a bathing place but rather a significant water source for Keraton Sumenep.
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
                            Pendopo (tempat pertemuan) merupakan sebuah ruangan di tengah kompleks keraton yang digunakan untuk pertemuan. Keraton ini memiliki bangunan sederhana namun khas yang didekorasi dengan gaya yang indah. Saat ini Pendopo digunakan untuk pemerintah dalam menerima tamu kehormatan, serta pelantikan pejabat daerah Sumenep.  Dahulu kala Pendopo ini digunakan sebagai tempat resmi untuk menerima tamu-tamu kerajaan, pelaksanaan upacara adat, tempat pertunjukan seni, serta tempat untuk konsultasi dan pengambilan keputusan strategis terkait dengan pemerintahan dan administrasi kerajaan.
                            @else
                            The Pendopo (Meeting Hall) is a central chamber within the palace complex used for official gatherings. It features simple yet distinct architecture adorned with beautiful decorations. Currently, the Pendopo hosts government receptions for dignitaries and local officials' inaugurations. In the past, it served as the official venue for royal receptions, traditional ceremonies, artistic performances, consultations, and strategic decision-making related to governance and administration.
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
                <div class="col-sm-4 my-auto">
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
                            Raja dan Putri, sarung, dan sajadah dari kulit macan.
                            <br><br>
                            Dahulu kala Rumah Penyepen ini merupakan keraton lama, yakni keraton peninggalan Tumenggung Tirtonegoro atau Bindara Saod dan Gusti Raden Ayu Rasmana Tirtonegoro (Ratu Tirtonegoro), penguasa Sumenep ke-XXX. Gusti Raden Ayu Rasmana Tirtonegoro (Ratu Tirtonegoro) tak lain adalah orang tua angkat dari Panembahan Somala (Raden Asirudin). Keraton tersebut dibangun menghadap selatan dengan bangunan yang lebih sederhana. Keraton lama disebut juga Ndalem Penyepen, terdiri dari pendopo dan sebuah rumah dengan 4 buah kamar serta loteng, tempat Tumenggung Tirtonegoro (Bindara Saod) menyepi. Bila dari arah pintu masuk, kamar depan sebelah kanan merupakan tempat tidur Tumenggung Tirtonegoro, dan kamar depan sebelah kiri merupakan kamar Gusti Raden Ayu Rasmana Tirtonegoro.
                        @else
                            The Penyepen House, located on the west side of the Sumenep Palace, is currently used as a
                            collection room for the Sumenep Palace Museum, also known as Museum Keraton Sumenep III. The
                            collection in this third museum includes various items such as chairs, beds, large mirrors,
                            buffets, gamparan (traditional footwear), royal seals, water filters, ceramic spoons, wooden
                            puppets, leather puppets, fossils (including dugong bones, elephant teeth, shells, wood, and
                            stones), the clothes of the king and princess, sarongs, and tiger skin prayer rugs.
                            <br><br>
                            Historically, Rumah Penyepen served as the old palace, the residence of Tumenggung Tirtonegoro or Bindara Saod and Gusti Raden Ayu Rasmana Tirtonegoro (Ratu Tirtonegoro), the rulers of Sumenep in the 30th reign. This palace faced south and consisted of simpler structures. Also known as Ndalem Penyepen, it included a pavilion and a house with four chambers and an attic where Tumenggung Tirtonegoro secluded himself. From the entrance, the right front chamber served as Tumenggung Tirtonegoro's bedroom and the left front chamber was Gusti Raden Ayu Rasmana Tirtonegoro's.
                        @endif

                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
