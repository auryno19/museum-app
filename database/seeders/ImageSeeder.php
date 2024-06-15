<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'filepath' => '1_1.jpg',
            'id_collection' => '1',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '1_2.jpg',
            'id_collection' => '1',
            'sequence' => 2
        ]);
        Image::create([
            'filepath' => '2_1.jpg',
            'id_collection' => '2',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '2_2.jpg',
            'id_collection' => '2',
            'sequence' => 2
        ]);
        Image::create([
            'filepath' => '3.jpg',
            'id_collection' => '3',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '4_1.jpg',
            'id_collection' => '4',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '4_2.jpg',
            'id_collection' => '4',
            'sequence' => 2
        ]);
        Image::create([
            'filepath' => '4_3.jpg',
            'id_collection' => '4',
            'sequence' => 3
        ]);
        Image::create([
            'filepath' => '5.jpg',
            'id_collection' => '5',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '6.jpg',
            'id_collection' => '6',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '7,jpg',
            'id_collection' => '7',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '8.jpg',
            'id_collection' => '8',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '9.jpg',
            'id_collection' => '9',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '10.jpg',
            'id_collection' => '10',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '11.jpg',
            'id_collection' => '11',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '12.jpg',
            'id_collection' => '12',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '13.jpg',
            'id_collection' => '13',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '14.jpg',
            'id_collection' => '14',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '15.jpg',
            'id_collection' => '15',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '16-18.jpg',
            'id_collection' => '16',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '19.jpg',
            'id_collection' => '19',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '20.jpg',
            'id_collection' => '20',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '21.jpg',
            'id_collection' => '21',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '22.jpg',
            'id_collection' => '22',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '23.jpg',
            'id_collection' => '23',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '24_1.jpg',
            'id_collection' => '24',
            'sequence' => 1
        ]);
        Image::create([
            'filepath' => '24_2.jpg',
            'id_collection' => '24',
            'sequence' => 2
        ]);
        Image::create([
            'filepath' => '24_3.jpg',
            'id_collection' => '24',
            'sequence' => 3
        ]);

        Image::create([
            'filepath' => '25.jpg',
            'id_collection' => '25',
            'sequence' => 1
        ]);
       
    }
}
