<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(10)->create();

        Post::factory()->create([
            'title' => 'My Second Post',
            'description' => 'This is my second post.',
            'image' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fpixabay.com%2Fphotos%2Ftree-sunset-clouds-sky-silhouette-736885%2F&psig=AOvVaw27moe57h_daCg_QFbge8fL&ust=1730213311494000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCNjU2oCpsYkDFQAAAAAdAAAAABAE'
        ]);
    }
}
