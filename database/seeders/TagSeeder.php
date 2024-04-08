<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            ['label' => 'HTML', 'color' => '#F1672B'],
            ['label' => 'CSS', 'color' => '#1572B6'],
            ['label' => 'JS', 'color' => '#F6CE48'],
            ['label' => 'Vue', 'color' => '#00BB7C'],
            ['label' => 'php', 'color' => '#4D588E'],
            ['label' => 'Laravel', 'color' => '#CE3232'],
            ['label' => 'SQL', 'color' => '#D47131'],
            ['label' => 'Bootstrap', 'color' => '#9163D5']
        ];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->label = $tag['label'];
            $new_tag->slug = Str::slug($tag['label']);
            $new_tag->color = $tag['color'];

            $new_tag->save();
        }
    }
}
