<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $artist = new Artist();
        $artist->name = "Arvīds Priedīte";
        $artist->bio = "<p>Dzimis 22.10.1946. Salacgrīvā.</p>
                        <p>Beidzis Rīgas Lietišķās mākslas vidusskolas Tekstilmākslas nodaļu (1967)
                        un Latvijas Mākslas akadēmijas Tekstilmākslas nodaļu (1972).</p>
                        <p>Darbojas tekstilmākslā, dizaingrafikā, plakātā, pēdējos gados visvairāk
                        interjeru izveidē, kur arī liek lietā savus hiperreālista dotumus.</p>";
        $artist->slug = "arvids_priedite";
        $artist->save();

        $artist = new Artist([
            'name' => 'Ilmārs Blumbergs',
            'bio' => "<p>Ilmārs Blumbergs pieder pie māksliniekiem, kurus nekur nevar iekļaut –
                        viņš vienmēr ir bijis un paliek viens un kā neviens. Būdams scenogrāfs vai grafiķis,
                        gleznotājs vai zīmētājs, grāmatu ilustrētājs, tēlnieks, plakātists vai vēl nezin kas, –
                        visu un jebko viņš savā mākslā skata sakarībās, pārvērtībās, negaidītu un neizmērojamu koordināšu krustojumos.</p>",
            'slug' => 'ilmars_blumbergs'
        ]);
        $artist->save();
    }
}
