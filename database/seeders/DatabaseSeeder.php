<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'fikri dean',
            'username' => 'fikridean',
            'email' => 'deanradityo@gmail.com',
            'image' => 'user-profiles/profile.png',
            'is_admin' => 1,
            'password' => bcrypt('password')
        ]);

        // Comment::create([
        //     'post_id' => 1,
        //     'user_id' => 1,
        //     'body' => 'komentar pertama berhasil!'
        // ]);

        // Comment::create([
        //     'post_id' => 1,
        //     'user_id' => 2,
        //     'body' => 'komentar kedua berhasil!'
        // ]);

        // User::create([
        //     'name' => 'Sitta Vidyadevi',
        //     'username' => 'sittacantik',
        //     'email' => 'sitta@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(5)->create();

        Post::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quibusdam non fugit repudiandae maiores ipsam modi placeat tempore sint assumenda corporis ex incidunt ullam provident iste, quasi earum laboriosam quos facilis. Voluptas assumenda voluptate omnis eius molestiae ducimus sed consequatur dolorum doloremque suscipit quod, nemo eum fuga unde sapiente voluptatibus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quibusdam non fugit repudiandae maiores ipsam modi placeat tempore sint assumenda corporis ex incidunt ullam provident iste, quasi earum laboriosam quos facilis. Voluptas assumenda voluptate omnis eius molestiae ducimus sed consequatur dolorum doloremque suscipit quod, nemo eum fuga unde sapiente voluptatibus!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quibusdam non fugit repudiandae maiores ipsam modi placeat tempore sint assumenda corporis ex incidunt ullam provident iste, quasi earum laboriosam quos facilis. Voluptas assumenda voluptate omnis eius molestiae ducimus sed consequatur dolorum doloremque suscipit quod, nemo eum fuga unde sapiente voluptatibus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'judul keempatcd',
        //     'slug' => 'judul-keempatcd',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quibusdam non fugit repudiandae maiores ipsam modi placeat tempore sint assumenda corporis ex incidunt ullam provident iste, quasi earum laboriosam quos facilis. Voluptas assumenda voluptate omnis eius molestiae ducimus sed consequatur dolorum doloremque suscipit quod, nemo eum fuga unde sapiente voluptatibus!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

        // Post::create([
        //     'title' => 'judul kelima',
        //     'slug' => 'judul-kelima',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus quibusdam non fugit repudiandae maiores ipsam modi placeat tempore sint assumenda corporis ex incidunt ullam provident iste, quasi earum laboriosam quos facilis. Voluptas assumenda voluptate omnis eius molestiae ducimus sed consequatur dolorum doloremque suscipit quod, nemo eum fuga unde sapiente voluptatibus!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
    }
}
