<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'roles' => ['admin'],
        ]);

        for ($i = 1; $i <= 3; $i++) {
            factory(User::class)->create([
                'name' => "Editor $i",
                'email' => "editor-$i@example.com",
                'roles' => ['editor'],
            ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            factory(User::class)->create([
                'name' => "Author $i",
                'email' => "author-$i@example.com",
                'roles' => ['author'],
            ]);
        }
    }
}
