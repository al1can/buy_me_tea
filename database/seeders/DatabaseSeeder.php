<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Intervention\Image\Facades\Image;

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
        $user = \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('adminpass'),
        ]);

        //$imagePath = $request->image->store('uploads', 'public');
        //$image = Image::make("public/img/elephpantblue.png")->fit(400, 400);
        //$image->save(public_path('storage/admin'));
        // TODO: admin account cant have a page image bc idk how to work with the image library to save it to uploads and load it from there
        \App\Models\Page::factory()->create([
            'work' => 'is a website where you can accept donations from your supporters.',
            'about' => 'This is a platform to accept donations and start memberships or support creators. You can buy us tea to support our work. ',
            //'image' => Image::make('public\img\elephpantblue.png')->fit(400, 400),
            'image' => 'storage/admin',
            'social' => 'example.com',
            'link' => '/admin',
            'user_id' => $user->id
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
