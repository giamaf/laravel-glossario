<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['label' => 'Programmazione', 'color' => '#9163D5'],
            ['label' => 'HTML', 'color' => '#F1672B'],
            ['label' => 'CSS', 'color' => '#1572B6'],
            ['label' => 'JS', 'color' => '#F6CE48'],
            ['label' => 'php', 'color' => '#4D588E'],
            ['label' => 'OOP', 'color' => '#FFAFA4'],
            ['label' => 'VUE', 'color' => '#CE3232'],
            ['label' => 'GIT', 'color' => '#1F242B'],
            ['label' => 'SQL', 'color' => '#D47131'],
            ['label' => 'Costrutti', 'color' => '#31776C'],
            ['label' => 'Operatori', 'color' => '#545F34'],
            ['label' => 'Funzioni', 'color' => '#25426C'],
            ['label' => 'Variabili', 'color' => '#66283D']
        ];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->label = $tag['label'];
            $new_tag->color = $tag['color'];

            $new_tag->save();
        }
    }
}
