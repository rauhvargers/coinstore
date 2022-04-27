<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $artist = Artist::firstWhere("slug", "arvids_priedite");

        $product = new Product([
            'title' => "Veiksmes monēta",
            'description' => 'Centrā ceriņa zieds ar piecām ziedlapiņām, veidots ar apdruku violetā krāsā.
                                                  Virs tā –skaitlis "5", lejasdaļā zieda attēlu aptver puslokā vietots uzraksts "EURO".',
            'production_year' => 2021,
            'price' => 53.00,
            'currency' => 'EUR'
        ]);
        $product->artist_id = $artist->id;
        $product->save();


        $product = new Product([
            'title' => "Eduards Veidenbaums",
            'description' => 'Mākoņu attēls, no tā augšdaļā pa kreisi puslokā Eduarda Veidenbauma paraksta faksimils.
                              Uz mākoņa monētas vidusdaļā pa labi gadskaitlis 2017. ',
            'production_year' => 2017,
            'price' => 110.00,
            'currency' => 'EUR'
        ]);
        $product->artist_id = $artist->id;
        $product->save();

        $product = new Product([
            'title' => "Fregate \"Gekrönte Ehlendt\"",
            'description' => 'Centrā Latvijas lielā valsts ģerboņa attēls, zem tā gadskaitlis 1997. Monētas augšā puslokā uzraksts LATVIJAS, apakšā - REPUBLIKA.',
            'production_year' => 1997,
            'price' => 250.00,
            'currency' => 'LVL'
        ]);
        $product->artist_id = $artist->id;
        $product->save();


        #### Ilmārs Blumbergs
        $artist = Artist::firstWhere('slug', 'ilmars_blumbergs');

        $product = new Product([
            'title'=> 'Dzīvības monēta',
            'description' => 'Centrā divas zeltītas sirdsveida lapas, savienotas ar sudrabainu līniju.
                              Augšdaļā pa kreisi puslokā gadskaitlis 2007, lejasdaļā pa labi puslokā uzraksts 1 LATS.',
            'production_year' => 2007,
            'price' => 45.00,
            'currency' => 'LVL'
        ]);

        $product->artist_id = $artist->id;
        $product->save();


    }
}
