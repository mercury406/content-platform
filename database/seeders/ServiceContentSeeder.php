<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ServiceContent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();
                
        $faker = new \Faker\Generator();
        foreach($categories as $cat) {
            $count = rand(7, 20);
            for($i = 0; $i < $count; $i++)
            {
                ServiceContent::create([
                    "category_id" => $cat->id,
                    "text" => Str::random(160)
                ]);
            }
        }
    }
}
