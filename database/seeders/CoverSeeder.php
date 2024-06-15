<?php

namespace Database\Seeders;

use App\Models\Cover;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cover::create([
            'id' => 1,
            'title_id' => 'Kereta Kencana My Lord',
            'title_eng' => "Kereta Kencana (Royal Carriage)",
            'filepath' => '1_1.jpg'        
        ]);
        Cover::create([
            'id' => 2,
            'title_id' => "Kitab Suci Al-Qur'an Tulisan Tangan Sultan Abdurrahman (Raja Sumenep)",
            'title_eng' => "Al-Qur’an",
            'filepath' => '2_1.jpg'        
        ]);
        Cover::create([
            'id' => 3,
            'title_id' => 'Baju Besi',
            'title_eng' => "Armor",
            'filepath' => '3.jpg'        
        ]);
        Cover::create([
            'id' => 4,
            'title_id' => 'Keris',
            'title_eng' => 'Keris (Dagger)',
            'filepath' => '4_1.jpg'        
        ]);
        Cover::create([
            'id' => 5,
            'title_id' => 'Piring Oval',
            'title_eng' => "Oval Plate",
            'filepath' => '5.jpg'        
        ]);
        Cover::create([
            'id' => 6,
            'title_id' => 'Alat Kesenian Tradisional (Saronen)',
            'title_eng' => "Traditional Musical Instrument (Saronen)",
            'filepath' => '6.jpg'        
        ]);
        Cover::create([
            'id' => 7,
            'title_id' => 'Guci Guci Bertutup',
            'title_eng' => "Covered Jar",
            'filepath' => '7.jpg'        
        ]);
        Cover::create([
            'id' => 8,
            'title_id' => 'Peralatan Jamu Tradisional (Botekan)',
            'title_eng' => "Traditional Herbal Medicine Equipment (Botekan)",
            'filepath' => '8.jpg'        
        ]);
        Cover::create([
            'id' => 9,
            'title_id' => 'Alat Berhias (Kaca Hias/ Cermin)',
            'title_eng' => "Decorative Mirror",
            'filepath' => '9.jpg'        
        ]);
        Cover::create([
            'id' => 10,
            'title_id' => 'Gelang Kaki',
            'title_eng' => ".Ankle Bracelet",
            'filepath' => '10.jpg'        
        ]);
        Cover::create([
            'id' => 11,
            'title_id' => 'Alat Upacara Tradisional',
            'title_eng' => "Traditional Ceremony Tools",
            'filepath' => '11.jpg'        
        ]);
        Cover::create([
            'id' => 12,
            'title_id' => 'Sarana Pengadilan',
            'title_eng' => "Court Chairs",
            'filepath' => '16-18.jpg'        
        ]);
        Cover::create([
            'id' => 13,
            'title_id' => 'Aksesoris Wayang Kulit',
            'title_eng' => "Shadow Puppet Accessories",
            'filepath' => '19.jpg'        
        ]);
        Cover::create([
            'id' => 14,
            'title_id' => 'Gamparan Tonggulu (Sandal/Alas Kaki)',
            'title_eng' => "Gamparan Tonggulu (Sandals/Footwear)",
            'filepath' => '20.jpg'        
        ]);
        Cover::create([
            'id' => 15,
            'title_id' => 'Stempel Kerajaan',
            'title_eng' => 'Royal Seal',
            'filepath' => '21.jpg'        
        ]);
        Cover::create([
            'id' => 16,
            'title_id' => 'Cermin Toilet Besar',
            'title_eng' => 'Large Vanity Mirror',
            'filepath' => '22.jpg'        
        ]);
        Cover::create([
            'id' => 17,
            'title_id' => 'Tempat Tidur Raja Sumenep Ke XXX (Bindara Saod)',
            'title_eng' => "ed of the 30th King of Sumenep (Bindara Saod)",
            'filepath' => '23.jpg'        
        ]);
        Cover::create([
            'id' => 18,
            'title_id' => 'Patung Buddha',
            'title_eng' => 'Buddha Statue',
            'filepath' => '24_1.jpg'        
        ]);
        Cover::create([
            'id' => 19,
            'title_id' => 'Pakaian Pangantan Lilin',
            'title_eng' => "Wax Bridal Attire",
            'filepath' => '25.jpg'        
        ]);
       
       
    }
}
