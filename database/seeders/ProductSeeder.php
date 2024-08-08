<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
            "name" => "Nikon Vintage camera",
            "price" => "270000",
            "description" => "Vintage film camera by Nikon",
            "category" => "Cameras",
            "gallery" => "file:///C:/Users/user1/Downloads/pexels-alexazabache-3907507.jpg"
            ],
            [
                "name" => "FujiFilm X-T10",
                "price" => "470000",
                "description" => "Digital camera by FujiFilm",
                "category" => "Cameras",
                "gallery" => "file:///C:/Users/user1/Downloads/pexels-madebymath-90946.jpg"
            ],
            [
                "name" => "Shower set",
                "price" => "47000",
                "description" => "shower set including shower brushes and toiletry bag",
                "category" => "Self care sets",
                "gallery" => "file:///C:/Users/user1/Downloads/pexels-karolina-grabowska-4210339.jpg"
            ]
        ]);
    }
}
