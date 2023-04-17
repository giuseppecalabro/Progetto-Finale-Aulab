<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        $categories = [
            [
                "name" => "Coats",
                "nameit" => "Cappotti",
                "namees" => "Abrigos",
                "namejp" => "コート",
                "slug" => "cappotti",

            ],
            [
                "name" => "Jackets",
                "nameit" => "Giacche",
                "namees" => "Chaquetas",
                "namejp" => "ジャケット",
                "slug" => "giacche",

            ],
            [
                "name" => "Hats",
                "nameit" => "Cappelli",
                "namees" => "Sombreros",
                "namejp" => "帽子",
                "slug" => "cappelli",

            ],
            [
                "name" => "Glasses",
                "nameit" => "Occhiali",
                "namees" => "Lentes",
                "namejp" => "メガネ",
                "slug" => "occhiali",

            ],
            [
                "name" => "Sunglasses",
                "nameit" => "Occhiali da sole",
                "namees" => "Lentes de sol",
                "namejp" => "サングラス",  
                "slug" => "occhiali-da-sole",

            ],
            [
                "name" => "Earring",
                "nameit" => "Orecchini",
                "namees" => "Pendientes",
                "namejp" => "イヤリング", 
                "slug" => "orecchini",

            ],
            [
                "name" => "Necklaces",
                "nameit" => "Collane",
                "namees" => "Collares",
                "namejp" => "ネックレス", 
                "slug" => "collane",

            ],
            [
                "name" => "Bracelets",
                "nameit" => "Bracciali",
                "namees" => "Brazaletes",
                "namejp" => "ブレスレット",
                "slug" => "bracciali",

            ],
            [
                "name" => "Belts",
                "nameit" => "Cinture",
                "namees" => "Cinturones",
                "namejp" => "シートベルト",
                "slug" => "cinture",

            ],
            [
                "name" => "Bags",
                "nameit" => "Borse",
                "namees" => "Bolsas",
                "namejp" => "バッグ", 
                "slug" => "borse",

            ],
            [
                "name" => "Sweaters",
                "nameit" => "Maglioni",
                "namees" => "Suéteres",
                "namejp" => "セーター", 
                "slug" => "maglioni",

            ],
            [
                "name" => "T-Shirts",
                "nameit" => "Magliette",
                "namees" => "Camisetas",
                "namejp" => "シャツ",
                "slug" => "magliette",

            ],
            [
                "name" => "Tops",
                "nameit" => "Top",
                "namees" => "Top",
                "namejp" => "トップ", 
                "slug" => "top",

            ],
            [
                "name" => "Shirts",
                "nameit" => "Camicie",
                "namees" => "Camisas",
                "namejp" => "シャツ",  
                "slug" => "camicie",

            ],
            [
                "name" => "Trousers",
                "nameit" => "Pantaloni",
                "namees" => "Pantalones",
                "namejp" => "ズボン",
                "slug" => "pantaloni",

            ],
            [
                "name" => "Jeans",
                "nameit" => "Jeans",
                "namees" => "Jeans",
                "namejp" => "ジーンズ", 
                "slug" => "jeans",

            ],
            [
                "name" => "Skirts",
                "nameit" => "Gonne",
                "namees" => "Faldas",
                "namejp" => "スカート", 
                "slug" => "gonne",

            ],
            [
                "name" => "Skeakers",
                "nameit" => "Scarpe da ginnastica",
                "namees" => "Zapatillas de deporte",
                "namejp" => "スニーカー",
                "slug" => "scarpe-da-ginnastica",

            ],
            [
                "name" => "Boots",
                "nameit" => "Stivali",
                "namees" => "Botas",
                "namejp" => "ブーツ",
                "slug" => "stivali",

            ],
            [
                "name" => "Heels",
                "nameit" => "Tacchi",
                "namees" => "Tacones",
                "namejp" => "ハイヒール", 
                "slug" => "tacchi",

            ],
        ];
        foreach($categories as $category){
            DB::table("categories")->insert(
                [
                    "name" => $category["name"],
                    "nameit" =>  $category["nameit"],
                    "namees" => $category["namees"],
                    "namejp" => $category["namejp"], 
                    "slug" => $category["slug"],  

                ]
            );
        }
    }
}
