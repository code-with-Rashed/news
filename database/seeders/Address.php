<?php

namespace Database\Seeders;

use App\Models\Address as ModelsAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Address extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $address = new ModelsAddress();
        $address->address = "XYZ Road , ABC Building New Yourk, USA";
        $address->contact = "88 01921042138";
        $address->email = "news@gmail.com";
        $address->facebook = "facebook.com";
        $address->twitter = "twitter.com";
        $address->linkdin = "linkdin.com";
        $address->map = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387194.06225701555!2d-74.30932678804537!3d40.697019288954785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1700986766942!5m2!1sen!2sbd";
        $address->save();
    }
}
