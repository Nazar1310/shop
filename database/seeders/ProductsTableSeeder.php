<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::updateOrCreate([
            'name' => 'Aura',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'photo_2022-06-17_18-10-08.jpg,photo_2022-06-17_18-15-11.jpg,photo_2022-06-17_18-15-12.jpg,photo_2022-06-17_18-15-14.jpg,photo_2022-06-17_18-15-16.jpg,photo_2022-06-17_18-15-17.jpg,photo_2022-06-17_18-15-19.jpg',
            'video' => 'IMG_6976.MOV',
            'preview' => 'photo_2022-06-17_18-10-08.jpg',
            'media_folder' => '0001Aura',
        ]);
        return;
        Product::updateOrCreate([
            'name' => 'Lazy Girl',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'photo_2022-06-17_18-16-18.jpg,photo_2022-06-17_18-16-20.jpg,photo_2022-06-17_18-16-22.jpg,photo_2022-06-17_18-16-24.jpg,photo_2022-06-17_18-16-25.jpg,photo_2022-06-17_18-16-27.jpg,photo_2022-06-17_18-16-30.jpg,photo_2022-06-17_18-16-31.jpg,photo_2022-06-17_18-16-33.jpg',
            'video' => 'IMG_3733.MP4',
            'preview' => 'photo_2022-06-17_18-16-18.jpg',
            'media_folder' => '0002LazyGirl',
        ]);
        Product::updateOrCreate([
            'name' => 'Elena',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'photo_2022-06-17_18-17-29.jpg,photo_2022-06-17_18-17-30.jpg,photo_2022-06-17_18-17-32.jpg,photo_2022-06-17_18-17-34.jpg,photo_2022-06-17_18-17-38.jpg,photo_2022-06-17_18-17-41.jpg',
            'video' => 'IMG_3737.MP4',
            'preview' => 'photo_2022-06-17_18-17-29.jpg',
            'media_folder' => '0003Elena',
        ]);
        Product::updateOrCreate([
            'name' => 'Jakie',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'photo_2022-06-17_18-18-19.jpg,photo_2022-06-17_18-18-20.jpg,photo_2022-06-17_18-18-22.jpg,photo_2022-06-17_18-18-24.jpg,photo_2022-06-17_18-18-25.jpg,photo_2022-06-17_18-18-27.jpg,photo_2022-06-17_18-18-30.jpg,photo_2022-06-17_18-18-31.jpg',
            'preview' => 'photo_2022-06-17_18-18-19.jpg',
            'media_folder' => '0004Jakie',
        ]);
        Product::updateOrCreate([
            'name' => '0005Mystic',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'photo_2022-06-17_18-19-02.jpg,photo_2022-06-17_18-19-04.jpg,photo_2022-06-17_18-19-07.jpg,photo_2022-06-17_18-19-08.jpg,photo_2022-06-17_18-19-10.jpg,photo_2022-06-17_18-19-11.jpg,photo_2022-06-17_18-19-14.jpg',
            'preview' => 'photo_2022-06-17_18-19-02.jpg',
            'media_folder' => '0005Mystic',
        ]);
        Product::updateOrCreate([
            'name' => 'Eva',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'photo_2022-06-17_18-19-47.jpg,photo_2022-06-17_18-19-48.jpg,photo_2022-06-17_18-19-50.jpg,photo_2022-06-17_18-19-52.jpg,photo_2022-06-17_18-19-54.jpg',
            'preview' => 'photo_2022-06-17_18-19-47.jpg',
            'media_folder' => '0006Eva',
        ]);
        Product::updateOrCreate([
            'name' => 'Sofia',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'photo_2022-06-17_18-20-20.jpg,photo_2022-06-17_18-20-22.jpg,photo_2022-06-17_18-20-24.jpg,photo_2022-06-17_18-20-25.jpg,photo_2022-06-17_18-20-27.jpg,photo_2022-06-17_18-20-28.jpg,photo_2022-06-17_18-20-30.jpg,photo_2022-06-17_18-20-32.jpg,photo_2022-06-17_18-20-33.jpg,photo_2022-06-17_18-20-35.jpg',
            'preview' => 'photo_2022-06-17_18-20-20.jpg',
            'media_folder' => '0007Sofia',
        ]);
//        Product::updateOrCreate([
//            'name' => 'Si',
//            'description' => 'description',
//            'price' => 100,
//            'size' => 'S,L,XL,XXL',
//            'color' => 'black,white',
//            'images' => 'photo (21 of 50).jpg,photo (23 of 50).jpg,photo (25 of 50).jpg',
//            'preview' => 'photo (21 of 50).jpg',
//            'media_folder' => '3003Si',
//        ]);
        Product::updateOrCreate([
            'name' => 'Vikie',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'IMG_0271.JPG,MNR_2658.JPG,MNR_2664.jpg,MNR_2665.JPG',
            'preview' => 'IMG_0271.JPG',
            'media_folder' => '3301Vikie',
        ]);
        Product::updateOrCreate([
            'name' => 'Dominicana',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'MNR_2738.jpg,MNR_2748.JPG,MNR_2749.JPG,MNR_2752.jpg',
            'preview' => 'MNR_2738.jpg',
            'media_folder' => '3302Dominicana',
            'mark' => 'top',
        ]);
        Product::updateOrCreate([
            'name' => 'Doli',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'MNR_2810.jpg,MNR_2814.JPG,MNR_2818.jpg,MNR_2820.jpg,MNR_2824.JPG,MNR_2825.JPG',
            'preview' => 'MNR_2810.jpg',
            'media_folder' => '3303Doli',
            'mark' => 'Deal Of The Week',
        ]);
        Product::updateOrCreate([
            'name' => 'Rosy',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'IMG_0277.JPG,IMG_0278.JPG,IMG_0279.JPG,IMG_0280.JPG',
            'preview' => 'IMG_0277.JPG',
            'media_folder' => '3305Rosy',
        ]);
        Product::updateOrCreate([
            'name' => 'Valentine',
            'description' => 'description',
            'price' => 100,
            'size' => 'S,L,XL,XXL',
            'color' => 'black,white',
            'images' => 'IMG_0795_Facetune_06-02-2022-18-55-28.jpeg,IMG_0802_Facetune_06-02-2022-18-56-43.jpeg,IMG_0817_Facetune_06-02-2022-18-56-59.jpeg,IMG_0818_Facetune_06-02-2022-18-57-32.jpeg',
            'preview' => 'IMG_0795_Facetune_06-02-2022-18-55-28.jpeg',
            'media_folder' => '3307Valentine',
        ]);
//        Product::updateOrCreate([
//            'name' => 'Amore',
//            'description' => 'description',
//            'price' => 100,
//            'size' => 'S,L,XL,XXL',
//            'color' => 'black,white',
//            'images' => 'photo (11 of 50).jpg,photo (12 of 50).jpg,photo (13 of 50).jpg,photo (14 of 50).jpg,photo (15 of 50).jpg',
//            'preview' => 'photo (11 of 50).jpg',
//            'media_folder' => '7001Amore',
//        ]);
//        Product::updateOrCreate([
//            'name' => 'Emerald',
//            'description' => 'description',
//            'price' => 100,
//            'size' => 'S,L,XL,XXL',
//            'color' => 'black,white',
//            'images' => 'photo (38 of 50).jpg,photo (39 of 50).jpg,photo (40 of 50).jpg',
//            'preview' => 'photo (38 of 50).jpg',
//            'media_folder' => '7003Emerald',
//        ]);
//        Product::updateOrCreate([
//            'name' => 'Pearl',
//            'description' => 'description',
//            'price' => 100,
//            'size' => 'S,L,XL,XXL',
//            'color' => 'black,white',
//            'images' => 'DSC08224 копия.jpg,DSC08291 копия.jpg,DSC08301 копия.jpg,DSC08319 копия.jpg,photo (26 of 50).jpg,photo (27 of 50).jpg,photo (28 of 50).jpg,photo (29 of 50).jpg,photo (30 of 50).jpg',
//            'preview' => 'DSC08224 копия.jpg',
//            'media_folder' => '7004Pearl',
//        ]);
//        Product::updateOrCreate([
//            'name' => 'Night',
//            'description' => 'description',
//            'price' => 100,
//            'size' => 'S,L,XL,XXL',
//            'color' => 'black,white',
//            'images' => 'DSC07304 копия.jpg,DSC07313 копия.jpg,DSC07326 копия.jpg,DSC07357 копия.jpg,DSC07398 копия.jpg',
//            'preview' => 'DSC07304 копия.jpg',
//            'media_folder' => '8009Night',
//        ]);
    }
}
