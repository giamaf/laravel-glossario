<?php

namespace Database\Seeders;

use App\Models\Link;
use App\Models\Word;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            ['label' => 'HTML', 'url' => 'https://it.wikipedia.org/wiki/HTML'],
            ['label' => 'CSS', 'url' => 'https://it.wikipedia.org/wiki/css'],
            ['label' => 'JavaScript', 'url' => 'https://it.wikipedia.org/wiki/Bootstrapxxxx_(framework)'],
            ['label' => 'Bootstrap', 'url' => 'https://it.wikipedia.org/wiki/Bootstrap_(framework)'],
            ['label' => 'PHP', 'url' => 'https://it.wikipedia.org/wiki/Bootstrapsd_(framework)'],
            ['label' => 'SQL', 'url' => 'https://it.wikipedia.org/wiki/Bootstraps_(framework)'],
            ['label' => 'Laravel', 'url' => 'https://it.wikipedia.org/wiki/Bootstrapd_(framework)'],
        ];

        $word_ids = Word::pluck('id')->toArray();

        foreach ($links as $link) {
            $new_link = new Link();
            $new_link->label = $link['label'];
            $new_link->url = $link['url'];

            $new_link->word_id = Arr::random($word_ids);

            $new_link->save();
        }
    }
}
