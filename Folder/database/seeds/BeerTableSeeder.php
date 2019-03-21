<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beers')->delete();
        $imageFolder = 'database/Images/';
        $imagePaths = [
            file_get_contents($imageFolder . 'Jupiler.jpg'),
            file_get_contents($imageFolder . 'Duvel.jpg'),
            file_get_contents($imageFolder . 'Stella Artois.jpg'),
            file_get_contents($imageFolder . 'Leffe Blond.jpg'),
            file_get_contents($imageFolder . 'Carlsberg.jpg'),
            file_get_contents($imageFolder . 'Westvleteren.jpg'),
            file_get_contents($imageFolder . 'Orval.jpg'),
            file_get_contents($imageFolder . 'Rochefort.jpg'),
            file_get_contents($imageFolder . 'Chimay rood.jpg'),
            file_get_contents($imageFolder . 'Westmalle dubbel.jpg')
        ];

        $beers =
            [
                new \App\Beer([
                    'name' => 'Jupiler',
                    'description' => 'Jupiler is the best selling beer in Belgium',
                    'price' => 3,
                    'alcohol' => 5.2,
                    'image_file' => base64_encode($imagePaths[0])
                ]),
                new \App\Beer([
                    'name' => 'Duvel',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 4,
                    'alcohol' => 8.5,
                    'image_file' => base64_encode($imagePaths[1])
                ]),
                new \App\Beer([
                    'name' => 'Stella Artois',
                    'description' => 'Stella Artois is a Belgian pilsner which was first brewed by Brouwerij Artois in Leuven Belgium in 1926',
                    'price' => 2,
                    'alcohol' => 5.2,
                    'image_file' => base64_encode($imagePaths[2])
                ]),
                new \App\Beer([
                    'name' => 'Leffe Blond',
                    'description' => 'Leffe Blond is an authentic blond abbey beer with a hint of bitterness',
                    'price' => 3,
                    'alcohol' => 7.5,
                    'image_file' => base64_encode($imagePaths[3])
                ]),
                new \App\Beer([
                    'name' => 'Carlsberg',
                    'description' => 'Carlsberg is a Danish beer brand of low fermentation',
                    'price' => 1,
                    'alcohol' => 5.5,
                    'image_file' => base64_encode($imagePaths[4])
                ]),
                new \App\Beer([
                    'name' => 'Westvleteren',
                    'description' => 'Westvleteren is a Trappist beer brewed by the monks of St Sixtus Abbey of Westvleteren',
                    'price' => 4,
                    'alcohol' => 5.8,
                    'image_file' => base64_encode($imagePaths[5])
                ]),
                new \App\Beer([
                    'name' => 'Orval',
                    'description' => 'Orval beer is a high fermentation beer',
                    'price' => 5,
                    'alcohol' => 6.2,
                    'image_file' => base64_encode($imagePaths[6])
                ]),
                new \App\Beer([
                    'name' => 'Rochefort 8',
                    'description' => 'Rochefort is a Trappist beer brewed at Notre-Dame de Saint-Rémy Abbey',
                    'price' => 2.96,
                    'alcohol' => 9.0,
                    'image_file' => base64_encode($imagePaths[7])
                ]),
                new \App\Beer([
                    'name' => 'Chimay rood',
                    'description' => 'Chimay rood has a beautiful copper colour and a fruity and soft taste which make this brown beer particularly tasty',
                    'price' => 2.75,
                    'alcohol' => 7.0,
                    'image_file' => base64_encode($imagePaths[8])
                ]),
                new \App\Beer([
                    'name' => 'Westmalle dubbel',
                    'description' => 'A Trappist beer from Westmalle Abbey in Belgium',
                    'price' => 8,
                    'alcohol' => 7.0,
                    'image_file' => base64_encode($imagePaths[9])
                ])
            ];
        foreach ($beers as $beer) {
            $beer->save();
        }

    }
}
