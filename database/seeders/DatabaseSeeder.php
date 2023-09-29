<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Categories;
use App\Models\Projects;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'name' => 'Muhammad Irfan Bakhtiar',
            'email' => 'admin@gmail.com',
            'job' => 'Front End Developer',
            'location' => 'Central Java, Indonesia',
            'about' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'password' => bcrypt('Larawind2023')
        ]);

        Categories::create([
            'name' => 'Dekstop',
            'slug' => 'dekstop',
            'user_id' => 1
        ]);

        Categories::create([
            'name' => 'Mobile Apps',
            'slug' => 'mobile-apps',
            'user_id' => 1
        ]);

        Categories::create([
            'name' => 'Website',
            'slug' => 'website',
            'user_id' => 1
        ]);

        Projects::create([
            'title' => 'First Project',
            'slug' => 'first-project',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex ullam tempore delectus beatae similique amet eligendi at perferendis, quidem, quod est consequatur! Temporibus perferendis et doloribus illum minima cumque velit. Quibusdam nemo doloribus aut minus sunt aliquam excepturi ut, dignissimos cumque adipisci unde fugit at quis quia rerum quaerat sit ullam provident accusantium expedita ratione? Vero, maiores? Optio similique autem quas vitae accusantium totam consectetur possimus veritatis ducimus labore molestiae voluptatibus, aliquid cum doloremque. Sit tempore praesentium esse eaque nesciunt ipsum sed accusamus unde rem, tenetur, dolores pariatur.',
            'categories_id' => 1,
            'user_id' => 1
        ]);

        Projects::create([
            'title' => 'Second Project',
            'slug' => 'second-project',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex ullam tempore delectus beatae similique amet eligendi at perferendis, quidem, quod est consequatur! Temporibus perferendis et doloribus illum minima cumque velit. Quibusdam nemo doloribus aut minus sunt aliquam excepturi ut, dignissimos cumque adipisci unde fugit at quis quia rerum quaerat sit ullam provident accusantium expedita ratione? Vero, maiores? Optio similique autem quas vitae accusantium totam consectetur possimus veritatis ducimus labore molestiae voluptatibus, aliquid cum doloremque. Sit tempore praesentium esse eaque nesciunt ipsum sed accusamus unde rem, tenetur, dolores pariatur.',
            'categories_id' => 1,
            'user_id' => 1
        ]);

        Projects::create([
            'title' => 'Third Project',
            'slug' => 'third-project',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex ullam tempore delectus beatae similique amet eligendi at perferendis, quidem, quod est consequatur! Temporibus perferendis et doloribus illum minima cumque velit. Quibusdam nemo doloribus aut minus sunt aliquam excepturi ut, dignissimos cumque adipisci unde fugit at quis quia rerum quaerat sit ullam provident accusantium expedita ratione? Vero, maiores? Optio similique autem quas vitae accusantium totam consectetur possimus veritatis ducimus labore molestiae voluptatibus, aliquid cum doloremque. Sit tempore praesentium esse eaque nesciunt ipsum sed accusamus unde rem, tenetur, dolores pariatur.',
            'categories_id' => 2,
            'user_id' => 1
        ]);

        Projects::create([
            'title' => 'Fourth Project',
            'slug' => 'fourth-project',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex ullam tempore delectus beatae similique amet eligendi at perferendis, quidem, quod est consequatur! Temporibus perferendis et doloribus illum minima cumque velit. Quibusdam nemo doloribus aut minus sunt aliquam excepturi ut, dignissimos cumque adipisci unde fugit at quis quia rerum quaerat sit ullam provident accusantium expedita ratione? Vero, maiores? Optio similique autem quas vitae accusantium totam consectetur possimus veritatis ducimus labore molestiae voluptatibus, aliquid cum doloremque. Sit tempore praesentium esse eaque nesciunt ipsum sed accusamus unde rem, tenetur, dolores pariatur.',
            'categories_id' => 3,
            'user_id' => 1
        ]);

        Projects::create([
            'title' => 'Fifth Project',
            'slug' => 'fifth-project',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex ullam tempore delectus beatae similique amet eligendi at perferendis, quidem, quod est consequatur! Temporibus perferendis et doloribus illum minima cumque velit. Quibusdam nemo doloribus aut minus sunt aliquam excepturi ut, dignissimos cumque adipisci unde fugit at quis quia rerum quaerat sit ullam provident accusantium expedita ratione? Vero, maiores? Optio similique autem quas vitae accusantium totam consectetur possimus veritatis ducimus labore molestiae voluptatibus, aliquid cum doloremque. Sit tempore praesentium esse eaque nesciunt ipsum sed accusamus unde rem, tenetur, dolores pariatur.',
            'categories_id' => 3,
            'user_id' => 1
        ]);

        Projects::create([
            'title' => 'Sixth Project',
            'slug' => 'sixth-project',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius maiores quam tenetur rerum nihil corporis quisquam odio in, laudantium rem ex ullam tempore delectus beatae similique amet eligendi at perferendis, quidem, quod est consequatur! Temporibus perferendis et doloribus illum minima cumque velit. Quibusdam nemo doloribus aut minus sunt aliquam excepturi ut, dignissimos cumque adipisci unde fugit at quis quia rerum quaerat sit ullam provident accusantium expedita ratione? Vero, maiores? Optio similique autem quas vitae accusantium totam consectetur possimus veritatis ducimus labore molestiae voluptatibus, aliquid cum doloremque. Sit tempore praesentium esse eaque nesciunt ipsum sed accusamus unde rem, tenetur, dolores pariatur.',
            'categories_id' => 2,
            'user_id' => 1
        ]);
    }
}
