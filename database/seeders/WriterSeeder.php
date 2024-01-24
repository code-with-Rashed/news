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
                "roll" => "admin",
                "photo" => "user.jpg",
                "name" => "Rashed alam",
                "email" => "rashed@news.com",
                "writed_news" => 3,
                "password" => Hash::make("12345")
            ],
            [
                "roll" => "moderator",
                "photo" => "user.jpg",
                "name" => "Arafat islam",
                "email" => "arafat@news.com",
                "writed_news" => 4,
                "password" => Hash::make("12345")
            ],
            [
                "roll" => "writer",
                "photo" => "user.jpg",
                "name" => "Mujahid islam",
                "email" => "mujahid@news.com",
                "writed_news" => 5,
                "password" => Hash::make("12345")
            ],
        ];
        foreach ($temporary_writers as $writer) {
            $writers = new Writer();
            $writers->roll = $writer["roll"];
            $writers->photo = $writer["photo"];
            $writers->name = $writer["name"];
            $writers->email = $writer["email"];
            $writers->writed_news = $writer["writed_news"];
            $writers->password = $writer["password"];
            $writers->save();
        }
    }
}
