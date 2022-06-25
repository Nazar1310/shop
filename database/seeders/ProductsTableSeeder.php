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
            'description' => 'Material: mreža v kombinaciji s čipko. Spodnji del, brazilske hlačke. Modrček z oporo.',
            'price' => 39,
            'size_bottom' => 'XS,S,M,L,XL,XXL',
            'size_bra' => '70,75,80,85',
            'size_cup' => 'A,B,C,D',
            'color' => 'black,white,beige',
            'images' => 'photo_2022-06-17_18-10-08.jpg,photo_2022-06-17_18-15-11.jpg,photo_2022-06-17_18-15-12.jpg,photo_2022-06-17_18-15-14.jpg,photo_2022-06-17_18-15-16.jpg,photo_2022-06-17_18-15-17.jpg,photo_2022-06-17_18-15-19.jpg',
            'video' => 'IMG_6976.MOV',
            'preview' => 'photo_2022-06-17_18-10-08.jpg',
            'media_folder' => '0001-Aura',
        ]);
        Product::updateOrCreate([
            'name' => 'Lazy Girl',
            'description' => 'Material: bombaž, mreža. Spodnji del, brazilske hlačke. Modrček z nežno, kakovostno mrežo, oporo in mehkimi skodelicami zagotavlja udobno oporo prsnega koša.',
            'price' => 35,
            'size_bottom' => 'XS,S,M,L,XL,XXL',
            'size_bra' => '70,75,80,85',
            'size_cup' => 'A,B,C,D',
            'color' => 'black,white,powder',
            'images' => 'photo_2022-06-17_18-16-18.jpg,photo_2022-06-17_18-16-20.jpg,photo_2022-06-17_18-16-22.jpg,photo_2022-06-17_18-16-24.jpg,photo_2022-06-17_18-16-25.jpg,photo_2022-06-17_18-16-27.jpg,photo_2022-06-17_18-16-30.jpg,photo_2022-06-17_18-16-31.jpg,photo_2022-06-17_18-16-33.jpg',
            'video' => 'IMG_3733.MP4',
            'preview' => 'photo_2022-06-17_18-16-18.jpg',
            'media_folder' => '0002-LazyGirl',
        ]);
        Product::updateOrCreate([
            'name' => 'Elena',
            'description' => 'Material: čipka, bombaž. Spodnji del, brazilske hlačke. Modrček z oporo je narejen iz mehke prozorne čipke.',
            'price' => 31,
            'size_bottom' => 'XS,S,M,L,XL,XXL',
            'size_bra' => '70,75,80,85',
            'size_cup' => 'A,B,C,D',
            'color' => 'black,white,lactic,red,blue,yellow ',
            'images' => 'photo_2022-06-17_18-17-29.jpg,photo_2022-06-17_18-17-30.jpg,photo_2022-06-17_18-17-32.jpg,photo_2022-06-17_18-17-34.jpg,photo_2022-06-17_18-17-38.jpg,photo_2022-06-17_18-17-41.jpg',
            'video' => 'IMG_3737.MP4',
            'preview' => 'photo_2022-06-17_18-17-29.jpg',
            'media_folder' => '0003-Elena',
        ]);
        Product::updateOrCreate([
            'name' => 'Jakie',
            'description' => 'Material: bombaž, mreža. Spodnji del brazilske hlačke z visokim pasom. Modrček z nastavljivimi naramnicami, klasično zaponko ter mehkimi skodelicami z oporo, ki se prilagodijo prsim.',
            'price' => 35,
            'size_bottom' => 'XS,S,M,L,XL,XXL',
            'size_bra' => '70,75,80,85',
            'size_cup' => 'A,B,C,D',
            'color' => 'black,lactic,pink,blue,beige',
            'images' => 'photo_2022-06-17_18-18-19.jpg,photo_2022-06-17_18-18-20.jpg,photo_2022-06-17_18-18-22.jpg,photo_2022-06-17_18-18-24.jpg,photo_2022-06-17_18-18-25.jpg,photo_2022-06-17_18-18-27.jpg,photo_2022-06-17_18-18-30.jpg,photo_2022-06-17_18-18-31.jpg',
            'preview' => 'photo_2022-06-17_18-18-19.jpg',
            'media_folder' => '0004-Jakie',
        ]);
        Product::updateOrCreate([
            'name' => 'Mystic',
            'description' => 'Material: bombaž. Spodnji del, brazilske hlačke. Modrček z oporo, nastavljivimi naramnicami ter zaponko.',
            'price' => 63,
            'size_bottom' => 'XS,S,M,L,XL,XXL',
            'size_bra' => '70,75,80,85',
            'size_cup' => 'A,B,C,D',
            'color' => 'black,green,purple',
            'images' => 'photo_2022-06-17_18-19-02.jpg,photo_2022-06-17_18-19-04.jpg,photo_2022-06-17_18-19-07.jpg,photo_2022-06-17_18-19-08.jpg,photo_2022-06-17_18-19-10.jpg,photo_2022-06-17_18-19-11.jpg,photo_2022-06-17_18-19-14.jpg',
            'preview' => 'photo_2022-06-17_18-19-02.jpg',
            'media_folder' => '0005-Mystic',
        ]);
        Product::updateOrCreate([
            'name' => 'Eva',
            'description' => 'Material: bombaž, čipka, mehka pena. Spodnji del, brazilske hlačke. Modrček ima naramnice nastavljive velikost in klasično zaponko. Skodelica je čipkasta s podložkom mehke pene. Hlačke so v zadnjem predelu brez robov.',
            'price' => 59,
            'size_bottom' => 'XS,S,M,L,XL,XXL',
            'size_bra' => '70,75,80,85',
            'size_cup' => 'A,B,C,D',
            'color' => 'green,orange',
            'images' => 'photo_2022-06-17_18-19-47.jpg,photo_2022-06-17_18-19-48.jpg,photo_2022-06-17_18-19-50.jpg,photo_2022-06-17_18-19-52.jpg,photo_2022-06-17_18-19-54.jpg',
            'preview' => 'photo_2022-06-17_18-19-47.jpg',
            'media_folder' => '0006-Eva',
        ]);
        Product::updateOrCreate([
            'name' => 'Sofia',
            'description' => 'Material: bombaž, čipka. Spodnji del, tangice ali brazilske hlačke. Modrček s prosojno čipkasto skodelico, nastavljivimi naramnicami ter večjim številom zaponk, ki omogočajo prilagajanje velikosti obsega pod oprsjem.',
            'price' => 33,
            'size_bottom' => 'XS,S,M,L,XL,XXL',
            'size_bra' => '70,75,80,85',
            'size_cup' => 'A,B,C,D',
            'color' => 'black,lactic,blue,lemon,red',
            'images' => 'photo_2022-06-17_18-20-20.jpg,photo_2022-06-17_18-20-22.jpg,photo_2022-06-17_18-20-24.jpg,photo_2022-06-17_18-20-25.jpg,photo_2022-06-17_18-20-27.jpg,photo_2022-06-17_18-20-28.jpg,photo_2022-06-17_18-20-30.jpg,photo_2022-06-17_18-20-32.jpg,photo_2022-06-17_18-20-33.jpg,photo_2022-06-17_18-20-35.jpg',
            'preview' => 'photo_2022-06-17_18-20-20.jpg',
            'media_folder' => '0007-Sofia',
        ]);
        Product::updateOrCreate([
            'name' => 'Si',
            'description' => 'Material: elastična mrežica in svileni vložki. Spodnji del, tangice ki omogočajo prilagajanje velikosti',
            'price' => 57,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'black',
            'images' => 'photo21of50.jpg,photo23of50.jpg,photo25of50.jpg',
            'preview' => 'photo25of50.jpg',
            'media_folder' => '3003-Si',
        ]);
        Product::updateOrCreate([
            'name' => 'Vikie',
            'description' => 'Material: čipka. Brazilske hlačke ki omogočajo prilagajanje velikosti. Modrček brez paralona. Vikie lahko nakupite brez pasa',
            'price' => 119,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'red',
            'images' => 'IMG_0271.jpg,MNR_2658.jpg,MNR_2664.jpg,MNR_2665.jpg',
            'preview' => 'IMG_0271.jpg',
            'media_folder' => '3301-Vikie',
        ]);
        Product::updateOrCreate([
            'name' => 'Dominicana',
            'description' => 'Material: čipka, mreža. Spodnji del tangice. Oba dela z možnostjo nastavljive velikosti.',
            'price' => 66,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'black,white',
            'images' => 'MNR_2738.jpg,MNR_2748.jpg,MNR_2749.jpg,MNR_2752.jpg',
            'preview' => 'MNR_2738.jpg',
            'media_folder' => '3302-Dominicana',
            'mark' => 'top',
        ]);
        Product::updateOrCreate([
            'name' => 'Doli',
            'description' => 'Material: čipka Chantilly s podlogo v bež barvi. Spodnji del: tangice',
            'price' => 77,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'black',
            'images' => 'MNR_2810.jpg,MNR_2814.jpg,MNR_2818.jpg,MNR_2820.jpg,MNR_2824.jpg,MNR_2825.jpg',
            'preview' => 'MNR_2810.jpg',
            'media_folder' => '3303-Doli',
            'mark' => 'Deal Of The Week',
        ]);
        Product::updateOrCreate([
            'name' => 'Rosy',
            'description' => 'Material: mehka čipka. Spodnji del, tangice. Rosy lahko nakupite brez pasa.',
            'price' => 119,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'red',
            'images' => 'IMG_0277.jpg,IMG_0278.jpg,IMG_0279.jpg,IMG_0280.jpg',
            'preview' => 'IMG_0277.jpg',
            'media_folder' => '3305-Rosy',
        ]);
        Product::updateOrCreate([
            'name' => 'Valentine',
            'description' => 'Material: teksturirana mreža. Spodnji del, tangice. Modrček brez opore.',
            'price' => 71,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'black',
            'images' => 'IMG_0795_Facetune_06-02-2022-18-55-28.jpeg,IMG_0802_Facetune_06-02-2022-18-56-43.jpeg,IMG_0817_Facetune_06-02-2022-18-56-59.jpeg,IMG_0818_Facetune_06-02-2022-18-57-32.jpeg',
            'preview' => 'IMG_0795_Facetune_06-02-2022-18-55-28.jpeg',
            'media_folder' => '3307-Valentine',
        ]);
        Product::updateOrCreate([
            'name' => 'Amore',
            'description' => 'Material: elastična mreža in saten. Spodnji del, hlačke ',
            'price' => 64,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C',
            'color' => 'black',
            'images' => 'photo11of50.jpg,photo12of50.jpg,photo13of50.jpg,photo14of50.jpg,photo15of50.jpg',
            'preview' => 'photo13of50.jpg',
            'media_folder' => '7001-Amore',
        ]);
        Product::updateOrCreate([
            'name' => 'Emerald',
            'description' => 'Material: mehka in elastična mreža iz poliestra. Spodnji del, tangice. Modrček brez opore z mehko skodelico',
            'price' => 60,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'emerald',
            'images' => 'photo38of50.jpg,photo39of50.jpg,photo40of50.jpg',
            'preview' => 'photo39of50.jpg',
            'media_folder' => '7003-Emerald',
        ]);
        Product::updateOrCreate([
            'name' => 'Pearl',
            'description' => 'Material: mehka, in elastična mreža. Spodnji del, hlačke z visokim pasom. Modrček + steznik',
            'price' => 69,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'black,white',
            'images' => 'DSC08224.jpg,DSC08291.jpg,DSC08301.jpg,DSC08319.jpg,photo(26of50).jpg,photo(27of50).jpg,photo(28of50).jpg,photo(29of50).jpg,photo(30of50).jpg',
            'preview' => 'DSC08224.jpg',
            'media_folder' => '7004-Pearl',
        ]);
        Product::updateOrCreate([
            'name' => 'Night',
            'description' => 'Material: elastična mreža. Spodnji del, hlačke. Pas in hlačke z možnostjo nastavljive velikosti.',
            'price' => 81,
            'size_bottom' => 'S,M,L',
            'size_bra' => '70,75,80',
            'size_cup' => 'B,C,D',
            'color' => 'black',
            'images' => 'DSC07304.jpg,DSC07313.jpg,DSC07326.jpg,DSC07357.jpg,DSC07398.jpg',
            'preview' => 'DSC07304.jpg',
            'media_folder' => '8009-Night',
        ]);
    }
}
