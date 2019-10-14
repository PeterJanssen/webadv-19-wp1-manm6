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
            $imageFolder . 'Jupiler.jpg',
            $imageFolder . 'Duvel.jpg',
            $imageFolder . 'Stella Artois.jpg',
            $imageFolder . 'Leffe Blond.jpg',
            $imageFolder . 'Carlsberg.jpg',
            $imageFolder . 'Westvleteren.jpg',
            $imageFolder . 'Orval.jpg',
            $imageFolder . 'Rochefort.jpg',
            $imageFolder . 'Chimay rood.jpg',
            $imageFolder . 'Westmalle dubbel.jpg'
        ];

        $images = $this->getFileContents($imagePaths);
        $base64EncodedImages = $this->getBase64EncodedImages($images);

        $beers =
            [
                new \App\Beer([
                    'name' => 'Jupiler',
                    'description' => 'Jupiler is the best selling beer in Belgium',
                    'price' => 3,
                    'alcohol' => 5.2,
                    'image_base64_uri' => $base64EncodedImages[0]
                ]),
                new \App\Beer([
                    'name' => 'Duvel',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 4,
                    'alcohol' => 8.5,
                    'image_base64_uri' => $base64EncodedImages[1]
                ]),
                new \App\Beer([
                    'name' => 'Stella Artois',
                    'description' => 'Stella Artois is a Belgian pilsner which was first brewed by Brouwerij Artois in Leuven Belgium in 1926',
                    'price' => 2,
                    'alcohol' => 5.2,
                    'image_base64_uri' => $base64EncodedImages[2]
                ]),
                new \App\Beer([
                    'name' => 'Leffe Blond',
                    'description' => 'Leffe Blond is an authentic blond abbey beer with a hint of bitterness',
                    'price' => 3,
                    'alcohol' => 7.5,
                    'image_base64_uri' => $base64EncodedImages[3]
                ]),
                new \App\Beer([
                    'name' => 'Carlsberg',
                    'description' => 'Carlsberg is a Danish beer brand of low fermentation',
                    'price' => 1,
                    'alcohol' => 5.5,
                    'image_base64_uri' => $base64EncodedImages[4]
                ]),
                new \App\Beer([
                    'name' => 'Westvleteren',
                    'description' => 'Westvleteren is a Trappist beer brewed by the monks of St Sixtus Abbey of Westvleteren',
                    'price' => 4,
                    'alcohol' => 5.8,
                    'image_base64_uri' => $base64EncodedImages[5]
                ]),
                new \App\Beer([
                    'name' => 'Orval',
                    'description' => 'Orval beer is a high fermentation beer',
                    'price' => 5,
                    'alcohol' => 6.2,
                    'image_base64_uri' => $base64EncodedImages[6]
                ]),
                new \App\Beer([
                    'name' => 'Rochefort 8',
                    'description' => 'Rochefort is a Trappist beer brewed at Notre-Dame de Saint-Rémy Abbey',
                    'price' => 2.96,
                    'alcohol' => 9.0,
                    'image_base64_uri' => $base64EncodedImages[7]
                ]),
                new \App\Beer([
                    'name' => 'Chimay rood',
                    'description' => 'Chimay rood has a beautiful copper colour and a fruity and soft taste which make this brown beer particularly tasty',
                    'price' => 2.75,
                    'alcohol' => 7.0,
                    'image_base64_uri' => $base64EncodedImages[8]
                ]),
                new \App\Beer([
                    'name' => 'Westmalle dubbel',
                    'description' => 'A Trappist beer from Westmalle Abbey in Belgium',
                    'price' => 8,
                    'alcohol' => 7.0,
                    'image_base64_uri' => $base64EncodedImages[9]
                ])
            ];

        $this->saveBeers($beers);
    }

    public function getFileContents(array $imagePaths)
    {
        $fileContents = [];
        foreach ($imagePaths as $imagePath) {
            array_push($fileContents, file_get_contents($imagePath));
        }

        return $fileContents;
    }

    public function getBase64EncodedImages(array $images)
    {
        $encodedImages = [];
        foreach ($images as $image) {
            array_push($encodedImages, base64_encode($image));
        }

        return $encodedImages;
    }

    private function saveBeers(array $beers)
    {
        foreach ($beers as $beer) {
            $beer->save();
        }
    }
}
