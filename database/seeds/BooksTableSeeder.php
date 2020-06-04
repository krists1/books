<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jaunsudr = \App\Author::where('surname', 'Jaunsudrabiņš')->first()->id;
        $shak = \App\Author::where('surname', 'Shakespeare')->first()->id;

        DB::table('books')->insert([
            [
                'title' => 'Baltā grāmata',
                'description' => 'Jaunsudrabiņš visu mūžu rakstīja arī stāstus un mazus tēlojumus. Daļa no šiem tēlojumiem apkopota "Baltajā grāmatā" (1914-1921) - vienā no gaišākajiem, poētiskākajiem un stilistiski izturētākajiem bērnības atmiņu stāstījumiem latviešu literatūrā.',
                'author_id' => $jaunsudr,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'title' => 'Aija',
                'description' => 'Triloģiju "Aija" veido trīs relatīvi patstāvīgi un stilistiski stipri atšķirīgi romāni: "Aija" (1911), "Atbalss" (1914) un "Ziema" (1925). Lasot šos trīs romānus, var labi izsekot gan Jaunsudrabiņa daiļrades, gan visa latviešu romāna žanra attīstībai. Pirmā daļa vēl ir gluži tradicionāls, bērnības atmiņu stilistikā ieturēts vēstījums par kalpa zēna Jāņa aizkustinošo mīlestību uz Aiju. Aija ir nedaudz vecāka par Jāni, tiecas ļoti racionāli plānot savu turpmāko dzīvi, tālab, gan zinādama par Jāņa mīlestību, tomēr apprec kādu krietni padzīvojušu un turīgu kurpnieku. Tātad - klasiska variācija par pirmās un nelaimīgas mīlestības tēmu. Otrajā daļā nu jau trīsdesmitgadīgais Jānis, pilsētnieks, gadījuma darbu strādnieks, kuram, kā viņš pats izsakās, Aija "kļuvusi par viņa likteni", kādu vasaru atgriežas mājās, kurās viņš savulaik kalpojis un saticis Aiju; sižetu veido Jāņa mēģinājums pārvarēt kādreizējo mīlestību ar jaunas mīlestības palīdzību.',
                'author_id' => $jaunsudr,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'title' => 'Hamlet',
                'description' => 'Prince Hamlet is visited by his father\'s ghost and ordered to avenge his father\'s murder by killing King Claudius, his uncle. After struggling with several questions, including whether what the ghost said is true and whether it is right for him to take revenge, Hamlet, along with almost all the other major characters, is killed.',
                'author_id' => $shak,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'title' => 'King Lear',
                'description' => 'An aged king divides his kingdom between two of his daughters, Regan and Goneril, and casts the youngest, Cordelia, out of his Kingdom for disloyalty. Eventually he comes to understand that it is Regan and Goneril who are disloyal, but he has already given them the kingdom. He wanders the countryside as a poor man until Cordelia comes with her husband, the King of France, to reclaim her father\'s lands. Regan and Goneril are defeated, but only after Cordelia has been captured and murdered. King Lear then dies of grief.',
                'author_id' => $shak,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'title' => 'Othello',
                'description' => '	Othello, a Moor and military general living in Venice, elopes with Desdemona, the daughter of a senator. Later, on Cyprus, he is persuaded by his servant Iago that his wife (Desdemona) is having an affair with Michael Cassio, his lieutenant. Iago\'s story, however, is a lie. Desdemona and Cassio try to convince Othello of their honesty but are rejected. Pursuing a plan suggested by Iago, Othello sends assassins to attack Cassio, who is wounded, while Othello himself smothers Desdomona in her bed. Iago\'s plot is revealed too late, and Othello commits suicide.',
                'author_id' => $shak,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
