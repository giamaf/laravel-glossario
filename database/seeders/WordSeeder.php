<?php

namespace Database\Seeders;

use App\Models\Word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class WordSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $tags = [
            [
                'id' => 1,
                'label' => 'html'
            ],
            [
                'id' => 2,
                'label' => 'css'
            ],
            [
                'id' => 3,
                'label' => 'javascript'
            ],
            [
                'id' => 4,
                'label' => 'vue'
            ],
            [
                'id' => 5,
                'label' => 'php'
            ],
            [
                'id' => 6,
                'label' => 'laravel'
            ],
            [
                'id' => 7,
                'label' => 'sql'
            ],
            [
                'id' => 8,
                'label' => 'bootstrap'
            ],
        ];

        $words = [
            [
                'term' => 'Html',
                'slug' => '',
                'description' => 'HTML è un acronimo che significa letteralmente "Hyper Text Markup Language", ovvero "Linguaggio a marcatori per ipertesti". Si può spiegare in maniera più semplice: HTML è un linguaggio che permette di impaginare e formattare pagine collegate fra di loro attraverso link - ovvero, i siti web. Ipertesto è un termine ormai datato (ma ancora valido) per definire l\'albero di navigazione che collega le pagine web: un flusso infinito di pagine collegate fra di loro attraverso dei link che permettono di spostarsi da un contenuto all\'altro.',
                'tags' => [1]
            ],
            [
                'term' => 'Css',
                'slug' => '',
                'description' => 'Cascading Style Sheets, meglio noto come CSS (in italiano fogli di stile a cascata), è un linguaggio usato per definire la formattazione di documenti HTML, XHTML e XML, ad esempio i siti web e relative pagine web. Le regole per comporre il CSS sono contenute in un insieme di direttive (Recommendations) emanate a partire dal 1996 dal W3C.L\'introduzione del CSS si è resa necessaria per separare i contenuti delle pagine HTML dalla loro formattazione o layout e permettere una programmazione più chiara e facile da utilizzare, sia per gli autori delle pagine stesse sia per gli utenti, garantendo contemporaneamente anche il riutilizzo di codice ed una sua più facile manutenzione.',
                'tags' => [2]
            ]
        ];

        foreach ($words as $word) {
            $new_word = new Word();
            $word['slug'] = Str::slug($word['term']);

            // Assegno i valori alla nuova istanza di word
            $new_word->term = $word['term'];
            $new_word->slug = $word['slug'];
            $new_word->description = $word['description'];
            // $new_word->tags = $word['tags'];

            // $new_word->fill($word);
            $new_word->save();
            $new_word->tags()->attach($word['tags']);
        }
    }
}