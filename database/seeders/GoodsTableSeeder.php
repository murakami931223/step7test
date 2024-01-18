<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ja_JP');
        for($i=0;$i<20;$i++){
            App\Goods::create([
                'goods_name' => $faker->word(),
                'maker_name' => $faker->word(),
                'price' => $faker->numberBetween(100,500),
                'goods_stock' => $faker->numberBetween(1,999),
                'comment' => $faker->word(),
                'goods_img'=>$faker->image(".public/upload",300,300,'cats',false),
                'created_at'=> $faker->dateTime('now'),
                'updated_at'=> $faker->dateTime('now'),
            ]);
        }
    }
}
