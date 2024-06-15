<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collection;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collection::create([
            'id' => 1,
            'title_id' => 'Kereta Kencana My Lord',
            'title_eng' => "Kereta Kencana (Royal Carriage)",
            'desc_id' => '
            Kereta My Lord merupakan salah satu hadiah dari pemerintah Inggris yaitu Letnan Gubernur Jenderal Sir Thomas Stanford Rafles untuk Sultan Abdurrahman Pakunataningrat sebagai Adipati Sumenep. Kereta My Lord merupakan koleksi Museum Keraton Sumenep di bawah kepemilikan Museum Keraton Sumenep.
            <br><br>
            Kereta My Lord / Melor merupakan kereta kuda yang memiliki bentuk yang bergaya Eropa yang dipadukan dengan nuansa Cina dan lokal (Sumenep). Kereta My Lord memiliki warna utama cokelat dengan ornament hias berwarna kuning emas, hijau dan merah. Kereta kuda memiliki empat roda yang terbuat dari bahan baja dilapisi karet.
            <br><br>
            Kereta kencana merupakan kendaraan spesial yang biasa digunakan pada zaman dahulu, hingga saat ini mash dioperasikan oleh kalangan tertentu atau seseorang yang memiliki jabatan dan kekuasaan seperti bangsawan, raja, ratu, wali, dan sultan. 
            <br><br>
            Tinggalan berupa kendaraan yang memiliki nilai sakral di Keraton Sumenep yaitu kereta kencana My Lord (Melor). Keraton Sumenep memiliki kereta kencana yang merupakan kendaraan yang digunakan oleh Sultan Abdurrahman Pakunataningrat pada masa pemerintahannya. Kereta kencana tersebut sekarang disimpan dan dirawat di Museum Keraton Sumenep.',
            'desc_eng' => "
            The My Lord Carriage is one of the gifts from the British government, specifically from Lieutenant Governor General Sir Thomas Stamford Raffles, to Sultan Abdurrahman Pakunataningrat as the Duke of Sumenep. The My Lord Carriage is part of the Sumenep Palace Museum collection and features a European-style combined with Chinese and local (Sumenep) nuances. It is primarily brown with gold, green, and red ornamental decorations. The horse carriage has four steel wheels covered in rubber, with the front wheels being smaller (diameter 105 cm, thickness 5 cm) and the rear wheels larger (diameter 166 cm). The middle of the carriage frame, between the front and rear wheels, houses a passenger compartment with two doors on each side.
            <br><br>
            On the front driver's seat, a wooden board reads:
            <br><br>
            'RENOVATED IN YOGYAKARTA IN 1990 DURING THE LEADERSHIP OF REGENT SOEGONDO.'
            <small>Note: The My Lord Carriage was renovated in 1990 in Yogyakarta during the tenure of Regent Soegondo.
            </small>",
            'id_cover' => '1'
        ]);
        Collection::create([
            'id' => 2,
            'title_id' => "Kitab Suci Al-Qur'an Tulisan Tangan Sultan Abdurrahman (Raja Sumenep)",
            'title_eng' => "AL-Qur'an",
            'desc_id' => "
            Riwayat Al-Qur'an koleksi Museum Keraton Sumnep, menurut keterangan Bpk. Sabirin, pegawai Museum Keraton Sumenep bahwa Al-Qur'an Koleksi Museum Keraton Sumenep tersebut adalah tulisan tangan dari raja Sumenep ke 32 yaitu Sultan Pakunataningrat Abdul Rachman (1811-1854 M). Konon Al-Qur'an tersebut ditulis dalam waktu semalam. Al-Qur' an ini menjadi koleksi Museum Keraton Sumenep sejak museum itu didirikan pada tahun 1965. Dengan demikian, Al-Qur'an tersebut saat ini berfungsi sebagai koleksi museum, tidak lagi difungsikan secara praktis.
            ",
            'desc_eng' => "
            According to Mr. Sabirin, a staff member at the Sumenep Palace Museum, the Al-Qur’an in the museum's collection is handwritten by the 32nd King of Sumenep, Sultan Pakunataningrat Abdul Rachman (1811-1854 AD). It is said that the Al-Qur’an was written in one night. It has been part of the museum's collection since its establishment in 1965 and is now a museum artifact rather than being used for practical purposes. The condition of the Al-Qur`an is relatively good and well-preserved, with some pages worn and ink smudging. All pages are intact, bound in thick paper covered in dark green linen (presumably a new cover). The front and right side edges of the cover are inscribed with 'AL-QUR'AN AL-AZIM' in gold. Each Surah begins with 'Bismillahirohmanirohim' except for Surah At-Tawbah (Repentance) in the 10th Juz. Each Juz transition is marked with red ink in a rectangular frame, and each verse transition is marked with a small red circle.
            ",
            'id_cover' => '2'
        ]);
        Collection::create([
            'id' => 3,
            'title_id' => 'Baju Besi',
            'title_eng' => "Armor",
            'desc_id' => '
            Baju perang, dibuat dari rangkaian rantai besi digunakan untuk melindungi diri dari serangan senjata musuh. Dengan menggunakan baju besi ini mereka akan terlindung dari serangan senjata keris, tombak, pedang bahkan senapan.
                        <br><br>
                        Benda berupa rangkaian cincin besi dengan kedua ujung saling bertemu. Cincin-cincin besi tersebut saling berkait satu sama lain yang berjajar secara vertikal dan horizontal. Ukuran cincin besi berdiameter 0, 8 cm dengan tebal 1, 5 mm. Baju zirah tersebut dipajang di sebuah sandaran kayu berlapis beludru berwarna merah yang berukuran tinggi 102 cm dan lebar 70 cm. Baju zirah tersebut tinggal lengan kanan dan bagian depan kanan, sementara itu bagian belakang sudah tidak ada.
            ',
            'desc_eng' => "
            The war armor, made of interlinked iron chains, was used for protection against enemy weapon attacks. This chainmail provided protection against weapons like kris, spears, swords, and guns.
            <br><br>
            The armor consists of iron rings interlinked vertically and horizontally, each ring with a diameter of 0.8 cm and a thickness of 1.5 mm. It is displayed on a red velvet-covered wooden stand, 102 cm high and 70 cm wide. The armor now only retains the right sleeve and front right section, with the back missing.
            ",
            'id_cover' => '3'
        ]);
        Collection::create([
            'id' => 4,
            'title_id' => 'Keris',
            'title_eng' => 'Keris (Dagger)',
            'desc_id' => 'Merupakan senjata tradisional yang di buat oleh seorang ali khusus yang disebut Mpu. pada awalnya keris merupakan senjata tikam yang dipergunakan untuk berperang, karena itulah pada bilahnya diolesi dengan racun mematikan yang disebut warangan, Namun dalam perkembangannya berubah fungsi menjadi sejenis pusaka yang dianggap mempunyai pengaruh tertentu kepada pemiliknya, pada bilah keris terdapat motif hias yang disebut pamor, tiap-tiap pamor mempunyai makna atau kekuatan yang tidak sama, ada keris yang dianggap bisa memberikan kemudahan rejeki, kemudian jodoh, ketentraman dan sebagainya tergantung pada pamor dan dapurnya.',
            'desc_eng' => "
            special craftsman called an Empu. Initially, the keris was a stabbing weapon used in warfare, often coated with a deadly poison called warangan. Over time, it became a revered heirloom believed to have specific influences on its owner. The blade features decorative patterns called pamor, each with distinct meanings or powers, such as bringing good fortune, marriage, tranquility, etc., depending on the pamor and the type of keris.
            ",
            'id_cover' => '4'
        ]);
        Collection::create([
            'id' => 5,
            'title_id' => 'Piring Oval',
            'title_eng' => "Oval Plate",
            'desc_id' => 'Merupakan salah satu koleksi Museum Keraton Sumenep. Piring besar berbentuk oval bagian badan piring cekung namu memiliki permukaan lingkaran pusat datar. Piring memiliki tepian melebar keluar, permukaan piring tertutup glasir warna putih. Bagian lingkaran pusat terdapat gambar/ foto tokoh laki-laki yang mengenakan pakaian tradisional bangsawan dan penutup kepala tradisional Jawa. tokoh tersebut merupakan Bupati Condronegoro, dibawah foto tersebut terdapat tulisan angka 48 dan angka tahun 1880.',
            'desc_eng' => "
            An oval-shaped large plate, part of the Sumenep Palace Museum collection. The body of the plate is concave with a flat central circle, and the edges flare outward. The plate is glazed white with a central image or photograph of a man in traditional aristocratic attire and a Javanese headpiece, identified as Regent Condronegoro. Below the photograph are the numbers 48 and the year 1880.
            ",
            'id_cover' => '5'
        ]);
        Collection::create([
            'id' => 6,
            'title_id' => 'Alat Kesenian Tradisional (Saronen)',
            'title_eng' => 'Traditional Musical Instrument (Saronen)',
            'desc_id' => '
            Di Madura terdapat berbagai alat kesenian tradisional yang lebih dikenal sejak dulu dan tetap berkembang hingga sekarang. Kesenian tersebut selain sebagai sarana upacara juga sebagai musik pengiring atau hiburan. 
            <br><br>
            Dinamakan saronen, karena instrumen utamanya adalah seruling khas Madura. Alat tiup itu berbentuk kerucut yang memiliki enam lubang berderet ke bawah.
            ',
            'desc_eng' => "
            In Madura, various traditional musical instruments have been known and continue to develop. These instruments serve ceremonial purposes and as music for entertainment. 
            <br><br>
            The saronen, named after its main instrument, is a Madurese flute. This conical wind instrument has six holes arranged vertically.
            ",
            'id_cover' => '6'
        ]);
        Collection::create([
            'id' => 7,
            'title_id' => 'Guci Guci Bertutup',
            'title_eng' => 'Covered Jar',
            'desc_id' => '
            Guci Dinasti Qing abad 19/akhir abad 20, Shiwan, Guangdong, Cina. 
            <br><br>
            Guci yang dilengkapi dengan tutup, bagian wadah (guci) berbentuk silindrik dasar lingkaran, bagian bahu menggelembung dan diakhiri dengan tepian yang lebih kecil daripada bahu. Bibir tegak setinggi 1,5 cm dan rata. Bagian dalam guci polos berglasir warna coklat. Dasar guci tidak berglasir. Tutup keramik berbentuk mengerucut tumpul ke atas, di bagian tengah terdapat tonjolan melingkar sebagai pegangan. Pegangan bagian atas berupa cekungan polos. Terdapat panil melingkar di bawah pegangan tutup yang dikelilingi hiasan lengkungan keluar berjajar sebanyak tujuh buah/ motif Ruyi. Masing-masing ujung lengkungan dihiasi motif (daun waru). Bagian dinding dalam
            tutup tidak berglasir, namun terdapat lelehan glasir warna coklat yang tidak rata. Terdapat lingkar kaki yang berfungsi sebagai
            pengait dengan bagian wadahnya.
            ',
            'desc_eng' => "
            A 19th/20th-century Qing Dynasty jar from Shiwan, Guangdong, China.
            <br><br>
            A jar with a lid, where the body (jar) has a cylindrical shape with a circular base, a bulging shoulder, and a rim smaller than the shoulder. The rim stands straight at a height of 1.5 cm and is flat. The interior of the jar is plain, glazed in brown, while the base is unglazed. The ceramic lid is conical, tapering bluntly upward, with a circular protrusion in the center serving as a handle. The handle's top is a plain concave shape. Below the handle, there is a circular panel surrounded by seven outward-curving Ruyi motifs, each ending with a leaf motif. The interior walls of the lid are unglazed but have uneven brown glaze drips. A ring foot serves as a connector to secure the lid to the jar.
            ",
            'id_cover' => '7'
        ]);

        Collection::create([
            'id' => 8,
            'title_id' => 'Peralatan Jamu Tradisional (Botekan)',
            'title_eng' => 'raditional Herbal Medicine Equipment (Botekan)',
            'desc_id' => '
            * Gambar Kanan
            Benda berbentuk balok bertingkat 7 buah. Bagian dasar memiliki 4 buah kaki dengan tinggi 11 cm dan berhias tumpal. Penutup kolong bagian depan terdapat ukiran motif hias sulur dan tumpal. Sisi kanan terdapat penutup lengkung seperti kelopak bunga. Sedangkan sisi kiri dan sisi belakang tanpa penutup kolong. 
            Bagian dasar ini berpenampang bujursangkar dan berukuran 43x43 cm.
            <br><br><br>

            * Gambar Kiri
            Benda berbentuk balok bertingkat 5 buah. Bagian dasar memiliki 4 buah kaki dengan tinggi 7 cm berbentuk prisma segitiga yang bermotif seperti muka singa kemudian melebar pada bagian bawah dan dihiasi garis vertical seperti kaki hewan. Penutup kolong bagian depan, sisi kanan, sisi kiri terdapat ukiran motif hias ukel sulur. Sedangkan sisi belakang dengan penutup lengkung yang tidak berhias.
            Bagian dasar ini berpenampang bujursangkar dan berukuran 39x39 cm.
            
            ',
            'desc_eng' => "
            * Right Image
            A seven-tiered block-shaped object with a base featuring four 11 cm high legs decorated with triangular motifs. The front of the base has carved floral patterns, with a flower-petal-like cover on the right side and no cover on the left and back sides.
            The square base measures 43x43 cm.
            <br><br><br>
            * Left Image:
            A five-tiered block-shaped object with a base featuring four 7 cm high legs, resembling lion faces with animal-like vertical lines. The front, right, and left sides of the base have floral carvings, while the back has an undecorated curved cover.
            he square base measures 39x39 cm.
            ",
            'id_cover' => '8'
        ]);
        Collection::create([
            'id' => 9,
            'title_id' => 'Alat Berhias (Kaca Hias/ Cermin)',
            'title_eng' => 'Decorative Mirror',
            'desc_id' => '
            Kaca Hias merupakan salah satu koleksi yang masuk dalam kategori peralatan berhias. Kaca hias memiliki bentuk pipih dan tegak lurus yang diberi dudukan/alas penopang berupa meja kayu dengan laci pada bagian bawahnya. Meja penopang kaca terbuat dari kayu jati dan memiliki empat buah kaki serta hiasan berupa ukiran di sisi depan, kanan dan kiri. Meja kayu terdiri dari tiga bagian yaitu, kaki, badan, dan bagian atas berupa dua tiang kayu yang mengapit kayu penopang kaca. Meja kaca dari kaki hingga badan memiliki bentuk persegi panjang dan pada bagian atas serta kakinya lebih melebar keluar. pada bagian kaki terdapat hiasan suluran berupa sulur florayang diberi warna kuning emas.
            ',
            'desc_eng' => "
            A decorative mirror, part of the museum's personal adornment collection. The mirror is flat and upright with a wooden stand and a drawer at the base. The teak wood stand has four legs and carvings on the front, right, and left sides. The stand consists of three parts: the legs, the body, and the top, with two wooden columns flanking the mirror. The rectangular body has an outwardly flaring top and bottom, with gold floral carvings on the legs.
            ",
            'id_cover' => '9'
        ]);
        Collection::create([
            'id' => 10,
            'title_id' => 'Gelang Kaki',
            'title_eng' => "Ankle Bracelet",
            'desc_id' => '
            Gelang tidak hanya digunakan di pergelangan tangan, akan tetapi gelang juga digunakan pada bagian tubuh lain yaitu pada pergelangan kaki. Tradisi penggunaan gelang kaki di nusantara diyakin sebagai budaya yang dibawa oleh para pendatang dari India dan Timur Tengah. Gelang kaki/ binggel yang menjadi koleksi Museum Keraton Sumenep merupakan gelang kaki yang digunakan oleh kaum perempuan di dalam lingkungan Keraton Sumenep. Fungsi gelang kaki pada masa Keraton Sumenep yaitu sebagai perhiasan yang digunakan oleh putri-putri keraton untuk memperkuat dan melangsingkan kaki serta sebagai perhiasan.
            ',
            'desc_eng' => "
            Anklets are not only worn on the wrists but also on other parts of the body, specifically the ankles. The tradition of wearing anklets in the archipelago is believed to have been brought by immigrants from India and the Middle East. The anklets/bangles in the collection of the Sumenep Palace Museum were worn by women within the Sumenep Palace. The function of anklets during the Sumenep Palace era was as jewelry worn by the palace princesses to enhance and slim the legs, as well as to serve as adornment.
            ",
            'id_cover' => '10'
        ]);
        Collection::create([
            'id' => 11,
            'title_id' => 'Alat Upacara Tradisional (Pekinangan)',
            'title_eng' => 'Traditional Ceremony Tools (Betel Nut Container)',
            'desc_id' => 'Wadah Pekinangan berbentuk silinder cekung di bagian dalam, badan membulat berbahan kayu berwarna coklat tua yang dilapisi bahan logam (kuningan) di tepian hingga bahu, dan bagian bawah hingga kaki. Bagian wadah pekinangan berkaki setinggi 2,7 cm. Bagian dasar berukuran lebih kecil daripada bibir wadah.',
            'desc_eng' => "The betel nut container is cylindrical with a concave interior, a rounded body made of dark brown wood, and is edged with metal (brass) from the rim to the shoulder and the base to the foot. The container has a 2.7 cm tall foot. The base is smaller than the rim.",
            'id_cover' => '11'
        ]);
        Collection::create([
            'id' => 12,
            'title_id' => 'Alat Upacara Tradisional (Kacep)',
            'title_eng' => 'Traditional Ceremony Tools (Kacep)',
            'desc_id' => 'Benda berupa sepasang tangkai dengan bagian pangkal berupa engsel yang menyatukan. Sepasang tangkai tersebut berbentuk silinder dengan ujung meruncing. Pada bagian salah satu pangkal tangkai berbentuk balok dengan tebal 0, 8 cm sedangkan pada pangkal tangkai satunya berbentuk lempengan dengan tebal 0,5 cm dan memiliki tajaman. Pada bagian engsel penyatu berbentuk lengkung bergerigi dan ada semacam surai.',
            'desc_eng' => "The kacep consists of a pair of handles joined by a hinge. The handles are cylindrical with pointed ends. One handle has a block shape at the base, 0.8 cm thick, while the other has a flat plate shape, 0.5 cm thick, and sharp. The hinge area is curved and serrated, with a sort of crest.",
            'id_cover' => '11'
        ]);
        Collection::create([
            'id' => 13,
            'title_id' => 'Alat Upacara Tradisional (Penyimpanan Tembakau dan Kapur)',
            'title_eng' => 'Traditional Ceremony Tools (Tobacco and Lime Storage)',
            'desc_id' => 'Kotak penyimpanan tembakau dan kapur berbentuk balok persegi panjang dengan memiliki 4 kaki di bagian sudutnya. Permukaan atas balok dilengkapi dengan tutup berbentuk segi empat, cara membukanya dengan menggeser bagian penutupnya.
            <br><br>
            Terdapat tonjolan berbentuk kotak di bagian penutup wadah yang difungsikan sebagai pegangan untuk (menggeser) membuka penutup. Bagian dalam kotak dibuat bersekat-sekat sejumlah 5 bagian. Seluruh bagian permukaan wadah terdapat hiasan yang dibuat dengan menggunakan teknik ukir. Permukaan samping hingga permukaan tepian atas wadah berhias geometris garis-garis vertikal berseling dengan garis diagonal saling bersilangan (bentuk huruf X). Sedangkan pada bagian tutup berhias geometris perpaduan antara bentuk hias lingkaran, garis-garis, dan motif kawung.',
            'desc_eng' => "The tobacco and lime storage box is a rectangular block with four legs at the corners. The top surface has a rectangular lid that slides open.
            <br>
            There is a square protrusion on the lid that serves as a handle for sliding the lid open. Inside, the box is divided into five compartments. The entire surface of the box is decorated with carvings. The sides and top edge are adorned with geometric vertical and diagonal lines crossing each other (forming an X shape). The lid is decorated with a combination of circular shapes, lines, and kawung motifs.",
            'id_cover' => '11'
        ]);
        Collection::create([
            'id' => 14,
            'title_id' => 'Alat Upacara Tradisional (Kecohan)',
            'title_eng' => 'Traditional Ceremony Tools (Spittoon)',
            'desc_id' => 'Kecohan merupakan tempat meludah bagi orang yang sedang menginang. Kecohan termasuk jenisa wadah terbuka yang memiliki bentuk seperti vas yaitu silindrik denngan bagian mulut memiliki ukuran lebih lebar daripada bagian badan dan kaki. Kecohan memiliki kaki dan berleher relatif tinggi, memiliki hiasan berupa lekukan-lekukan tipis atau pelipit tipis. Hiasan kecohan berupa motif bunga yang dipahatkan secara horisontal di bagian badan, memiliki garis rintik-rintik horisontal, di bagian atas dan bawah bermotif bunga. Bagian tengah leher memiliki motif tumpal dengan hiasan floraistik, bagian atas di antara jung-ujungnya berhias tumpal, hiasan bunga, dan bagian sisi dalam polos. Hiasan yang terdapat pada kecohan menggunakan teknik hias gores tipis (grafir).',
            'desc_eng' => "The spittoon is an open container used for spitting by those chewing betel nut. It is shaped like a vase with a cylindrical body and a wider mouth than the body and foot. It has a relatively high neck and is decorated with thin grooves or ridges. The body is adorned with floral motifs carved horizontally, with stippled horizontal lines and flower motifs above and below. The neck has a tumpal motif with floral decorations, and the interior is plain. The decorations are created using a thin engraving technique.",
            'id_cover' => '11'
        ]);
        Collection::create([
            'id' => 15,
            'title_id' => 'Alat Upacara Tradisional (Kendil)',
            'title_eng' => 'Traditional Ceremony Tools (Water Jug)',
            'desc_id' => 'Kendi berupa wadah tertutup, berbentuk silindris dengan bagian badan agak pipih (vertikal), bagian bahu terdapat bentuk karinasi, dan bagian kaki relatif pendek. Terdapat dua bentukan silindris di bagian badan atas dengan kedua lubang menghadap ke atas pada bidang yang sejajar. Dua bentuk silindris tersebut, salah satunya berfungsi sebagai cerat, dan satu berfungsi untuk memasukkan air kendi (mulut kendi).
            Bagian cerat memiliki lubang berdiameter kecil, sedangkan bagian untuk memasukkan air dalam kendi memiliki lubang diameter yang sedikit lebih lebar daripada bagian cerat. Antara cerat dan dengan mulut kendi dihubungkan dengan bentuk lengkungan. Bagian permukaan badan kendi terdapat hiasan pelipit melingkar menggunakan teknik gores dipadu dengan hiasan slip merah berupa motif garis-garis vertikal berjajar menggunakan teknik lukis.',
            
            'desc_eng' => 'The water jug is a closed container with a cylindrical shape and a slightly flattened body (vertically). The shoulder has a carinated shape, and the foot is relatively short. There are two cylindrical openings on the upper body, with both openings parallel and facing upward. One serves as a spout, and the other is for filling the jug with water. The spout has a small diameter, while the filling opening is slightly wider. The spout and filling opening are connected by a curved shape. The body surface of the jug has circular grooves and red slip decorations in vertical lines using a painting technique.',
            'id_cover' => '11'
        ]);
        Collection::create([
            'id' => 16,
            'title_id' => 'Kursi Raja',
            'title_eng' => 'Royal Throne',
            'desc_id' => '
            Kursi ini digunakan sebagai tempat duduk raja. Kursi raja ini digunakan pada zaman R.Ayu Tumenggung Tirtonegoro pada abad atau sekitar tahun 1750 - 1762 M.
            <br>
            Kursi pendek terbuat dari kayu bercat merah dikombinasi dengan rotan dan terdiri dari kaki, dudukan, pegangan, dan sandaran.
            Kaki berjumlah 4 buah, masing-masing mempunyai tinggi 12,5 cm, diameter 6 cm. Setiap kaki berbentuk 2 buah kerucut tumpul yang ujungnya saling berhadapan. Masing-masing permukaan terdapat beberapa garis melingkar.
            ',
            'desc_eng' => "This chair was used as the throne for the king. It was used during the reign of R.Ayu Tumenggung Tirtonegoro around 1750-1762 CE. The short chair is made of red-painted wood combined with rattan and consists of legs, a seat, armrests, and a backrest. It has four legs, each 12.5 cm high and 6 cm in diameter, shaped like two truncated cones with their bases facing each other. Each surface has circular grooves.",
            'id_cover' => '12'
        ]);
        Collection::create([
            'id' => 17,
            'title_id' => 'Kursi Saksi (2 Buah)',
            'title_eng' => 'Witness Chairs (2 pieces)',
            'desc_id' => '
            Kursi ini dahulu digunakan sebagai tempat duduk para saksi di ruang pengadilan. 
            Kursi terdiri dari bagian kaki, dudukan, pegangan, dan sandaran.
            Kaki berjumlah 4 buah. Ukuran maupun bentuk kaki depan dan belakang tidak sama. Tinggi kaki depan 27 cm, sedangkan kaki belakang setinggi 25 cm. Penampang kaki depan berbentuk bulat berdiameter 2,5 cm. Pada kaki depan terdapat 3 buah bulatan bersusun dengan diameter yang berbeda-beda. Bulatan atas berdiameter 6 cm, tengah berdiameter 6,5 cm dan paling bawah berdiameter 5 cm.
            Sedangkan kaki belakang berbentuk balok polos agak melengkung ke depan dengan sisi-sisi selebar 3,3 cm.
            Pegangan kursi berjumlah 2 buah, kanan dan kiri. Masing-masing berbentuk melengkung, menyatu dengan ujung depan dudukan, dan melebar ke bagian depan. Pegangan hanya mempunyai 1 ruas. Ujung-ujung ruas melebar ke bawah atau ke atas. Panjang pegangan 43 cm.
            Jarak pegangan ke dudukan setinggi 18,5 cm. Pada tengah ruas pegangan terdapat cekungan memanjang ke atas atau ke arah sandaran.
            ',
            'desc_eng' => "
            These chairs were used for witnesses in the courtroom. Each chair consists of legs, a seat, armrests, and a backrest. The four legs have different sizes and shapes for the front and back. The front legs are 27 cm tall, and the back legs are 25 cm tall. The front legs are round, 2.5 cm in diameter, with three stacked circles of varying diameters: 6 cm, 6.5 cm, and 5 cm. The back legs are plain blocks slightly curved forward, 3.3 cm wide.
            <br><br>
            The armrests, one on each side, are curved, connected to the front end of the seat, and widen at the front. Each armrest has a single section with ends that widen either upward or downward. They are 43 cm long and 18.5 cm high from the seat. The middle section of the armrests has a concave shape extending upward or toward the backrest.
            ",
            'id_cover' => '12'
        ]);
        Collection::create([
            'id' => 18,
            'title_id' => 'Kursi Terdakwah',
            'title_eng' => "Defendant's Chair",
            'desc_id' => 'Kursi berbentuk lingkaran tanpa kaki. Bahan kursi terbuat dari 2 batang rotan yang dipilin dan dibentuk melingkar sehingga terdapat kurang lebih 19 lingkar. Penampang atas agak cekung dan lebih lebar dibanding bagian bawah, bagian tengah agak mengecil lalu di bagian bawah kembali melebar. 
            Yang dimaksud dengan terdakwa adalah terdakwa adalah seorang tersangka yang dituntut, diperiksa, dan diadili di sidang pengadilan. Status sebagai pesakitan ini membawa orang tersebut menduduki level bawah pada saat itu, yang digambarkan dengan duduk di lantai, tidak seperti para hakim maupun saksi.',
            'desc_eng' => "This chair is circular without legs, made of two rattan rods twisted and formed into approximately 19 loops. The top section is slightly concave and wider than the bottom, with the middle section narrowing before widening again at the bottom. The defendant was a suspect prosecuted, examined, and tried in court. This low-status position is symbolized by sitting on the floor, unlike the judges or witnesses.",
            'id_cover' => '12'
        ]);
        Collection::create([
            'id' => 19,
            'title_id' => 'Aksesoris Wayang Kulit',
            'title_eng' => "Shadow Puppet Accessories",
            'desc_id' => 'Aksesoris Wayang Kulit Kayu. Wayang kulit kayu merupakan wayang yang terbuat dari bahan kayu yang diukir sedemikian rupa. Dalam pementasan kesenian wayang memang ada beberapa jenis wayang yang digunakan, ada yang berupa wayang kulit, kayu, dan wayang orang. Didalam etalase ini tersimpan beberapa tokoh wayang dan beberapa aksesoris pendukung pementasan kesenian wayang.',
            'desc_eng' => "Shadow puppet accessories made of wood. Wooden shadow puppets are carved from wood. In performances, various types of puppets are used, including leather puppets, wooden puppets, and human puppets. This display case contains several puppet characters and accessories supporting the puppet performance.",
            'id_cover' => '13'
        ]);
        Collection::create([
            'id' => 20,
            'title_id' => 'Gamparan Tonggulu (Sandal/Alas Kaki)',
            'title_eng' => "Gamparan Tonggulu (Sandals/Footwear)",
            'desc_id' => 'Digunakan untuk alas kaki, pada umumnya dibuat dari kayu bentaos. Gamparan ini termasuk sederhana, cara menggunakannya dengan menjepit antara ibu jari kaki dan jari pertama. Ada pula beberapa gamparan yang dihiasi dengan ukiran. Dalam perkembangannya peran gamparan ini terdesak oleh jenis sandal yang lebih praktis dan ringan.',
            'desc_eng' => 'These are wooden sandals commonly made from bentaos wood. Simple in design, they are worn by clamping the wood between the big toe and the second toe. Some gamparan are adorned with carvings. Over time, their role has been overshadowed by more practical and lightweight sandals.',
            'id_cover' => '14'
        ]);
        Collection::create([
            'id' => 21,
            'title_id' => 'Stempel Kerajaan',
            'title_eng' => 'Royal Seal',
            'desc_id' => 'Stempel kerajaan yang berfungsi sebagai Kelengkapan untuk
            Administrasi Pemerintahan
            pada masa Pemarintahan
            Sultan Abdurrahman.',
            'desc_eng' => 'The royal seal was used as part of the administrative apparatus during the reign of Sultan Abdurrahman.',
            'id_cover' => '15'
        ]);
        Collection::create([
            'id' => 22,
            'title_id' => 'Cermin Toilet Besar',
            'title_eng' => 'Large Vanity Mirror',
            'desc_id' => '
            Cermin ini berukuran sangat besar yang diletakkan didepan pintu agung keraton sumenep. Peletakan cermin ini ditujukan untuk orang-orang yang ingin bertemu dengan raja, agar bisa berkaca untuk merapikan diri di depan cermin besar ini. Karena konon raja-raja sumenep, sangat mencintai kebersihan dan kerapihan, jadi jika ada orang yang ingin menemui beliau dengan kondisi tidak rapi besar kemungkinan tidak akan mau raja untuk menemuinya.
            ',
            'desc_eng' => 'This large mirror was placed in front of the main entrance of the Sumenep Palace. It was intended for those wishing to meet the king to use for grooming themselves. It is said that the kings of Sumenep valued cleanliness and neatness highly, so anyone wishing to meet the king in a disheveled state would likely not be granted an audience.',
            'id_cover' => '16'
        ]);
        Collection::create([
            'id' => 23,
            'title_id' => 'Tempat Tidur Raja Sumenep Ke XXX (Bindara Saod)',
            'title_eng' => "Bed of the 30th King of Sumenep (Bindara Saod)",
            'desc_id' => '',
            'desc_eng' => '',
            'id_cover' => '17'
        ]);
        Collection::create([
            'id' => 24,
            'title_id' => 'Patung Buddha',
            'title_eng' => 'Buddha Statue',
            'desc_id' => '
            Patung yang duduk bersila dan tangan mendekap sebagai simbol yang dipuja oleh umat budha pada masa kerajaan majapahit.
            ',
            'desc_eng' => 'This statue depicts a seated Buddha with hands folded, symbolizing the deity venerated by Buddhists during the Majapahit Kingdom era.',
            'id_cover' => '18'
        ]);
        Collection::create([
            'id' => 25,
            'title_id' => 'Pakaian Pangantan Lilin',
            'title_eng' => 'Wax Bridal Attire',
            'desc_id' => 'Pakaian ini dipakai malam ketiga sejak acara perkawinan yang kedua mempelai dipersandingkan kembali kepelaminan. Acara ini merupakan penantian suatu “peristiwa malam pengantin".',
            'desc_eng' => 'This attire is worn on the third night after the wedding ceremony when the bride and groom are reunited in their bridal chamber. This event is an anticipation of the "wedding night."',
            'id_cover' => '19'
        ]);
    }
}
