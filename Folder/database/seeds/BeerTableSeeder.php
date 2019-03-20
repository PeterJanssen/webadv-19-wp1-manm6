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
        $beers =
            [
                new \App\Beer([
                    'name' => 'Jupiler',
                    'description' => 'Jupiler is the best selling beer in Belgium',
                    'price' => 3,
                    'alcohol' => 0.0,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Duvel',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 4,
                    'alcohol' => 8.5,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Stella Artois',
                    'description' => 'Stella Artois is a Belgian pilsner which was first brewed by Brouwerij Artois in Leuven Belgium in 1926.',
                    'price' => 2,
                    'alcohol' => 5.2,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Leffe Blond',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 3,
                    'alcohol' => 7.5,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Carlsberg',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 1,
                    'alcohol' => 5.5,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Westvleteren',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 4,
                    'alcohol' => 5.8,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Orval',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 5,
                    'alcohol' => 6.2,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Rochefort 8',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 2.96,
                    'alcohol' => 9.0,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Chimay rood',
                    'description' => 'Duvel is a natural beer with a subtle bitterness',
                    'price' => 2.75,
                    'alcohol' => 7.0,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ]),
                new \App\Beer([
                    'name' => 'Westmalle dubbel',
                    'description' => 'A Trappist beer from Westmalle Abbey in Belgium',
                    'price' => 8,
                    'alcohol' => 7.0,
                    'image' => file_get_contents("database/Images/Jupiler.jpg")
                ])
            ];
        foreach ($beers as $beer) {
            $beer->save();
        }

    }
}
