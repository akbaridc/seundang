<?php

namespace Database\Seeders;

use App\Enums\PostType;
use App\Models\Post\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Post::truncate();

        Post::create([
            'title'         => 'FAQ',
            'slug'          => 'faq',
            'content'       => 'Apa itu Seundang ?',
            'cover_image'   => null,
            'type'          => PostType::FAQ,
            'views'         => 0,
            'published'     => 1,
            'published_at'  => now(),
            'created_by'    => 1
        ]);

        Post::create([
            'title'         => 'Kebijakan Privasi',
            'slug'          => 'privacy-policy',
            'content'       => 'Kebijakan privasi Seundang',
            'cover_image'   => null,
            'type'          => PostType::PRIVACY_POLICY,
            'views'         => 0,
            'published'     => 1,
            'published_at'  => now(),
            'created_by'    => 1
        ]);

        Post::create([
            'title' => 'Term And Condition',
            'slug' => 'term-and-condition',
            'content' => 'Term And Condition Seundang',
            'cover_image' => null,
            'type' => PostType::TERM_CONDITION,
            'views' => 0,
            'published' => 1,
            'published_at' => now(),
            'created_by' => 1
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
