<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Room;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\ContactUs::factory(10)->create();
        // \App\Models\TypeRoom::factory(10)->create();
        
        \App\Models\User::factory()->create([
            'name' => 'abdelfatah Errazy',
            'username' => 'abdelfatah-Errazy',
            'email' => 'errazy.abdelfatah@gmail.com',
            'password' => bcrypt( 'abdou1234567'),
            'is_admin' => 1,
            'avatar' => 'assets/images/abdou.jpg',
        ]);
        
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H1.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H2.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H3.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H4.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H5.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H6.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H7.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H8.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H9.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H10.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H11.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H12.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H13.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H14.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H1.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H2.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H3.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H4.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H5.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H6.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H7.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H8.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H9.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
        \App\Models\ImageRoom::factory()->create([
            'titre' => 'titre img',
            'img' => ('assets/images/photos/H9.jpg'),
            'room' => Room::factory()->create()['idRoom'],
        ]);
    }
}
