<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $temporary_writers = [
            [
                "role" => "admin",
                "photo" => "user.jpg",
                "name" => "Rashed alam",
                "email" => "admin@news.com",
                "password" => Hash::make("12345")
            ],
            [
                "role" => "moderator",
                "photo" => "user.jpg",
                "name" => "Arafat islam",
                "email" => "moderator@news.com",
                "password" => Hash::make("12345")
            ],
            [
                "role" => "writer",
                "photo" => "user.jpg",
                "name" => "Mujahid islam",
                "email" => "writer@news.com",
                "password" => Hash::make("12345")
            ],
        ];
        foreach ($temporary_writers as $writer) {
            $writers = new Writer();
            $writers->role = $writer["role"];
            $writers->photo = $writer["photo"];
            $writers->name = $writer["name"];
            $writers->email = $writer["email"];
            $writers->password = $writer["password"];
            $writers->save();
        }
    }
}
