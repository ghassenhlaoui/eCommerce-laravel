<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>"Oppo Phone",
                'price'=>"860",
                'description'=>"A smartphone with 8gb ram and much more features",
                'category'=>"mobile",
                'gallery'=>"https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno6-5g-oversea/listpage/Phone-list-product-list-stellar-black-427-x-600.png.thumb.webp"
            ],
            [
                'name'=>"Samsung Tv",
                'price'=>"1290",
                'description'=>"A smart Tv with much more features",
                'category'=>"tv",
                'gallery'=>"https://images.samsung.com/is/image/samsung/africa-fr-full-hd-n5300-ua40n5300arxxa-frontblack-157766608?$720_576_PNG$"
            ],
            [
                'name'=>"Sony Tv",
                'price'=>"1080",
                'description'=>"A tv with much more features",
                'category'=>"tv",
                'gallery'=>"https://www.ubuy.tn/productimg/?image=aHR0cHM6Ly9tLm1lZGlhLWFtYXpvbi5jb20vaW1hZ2VzL0kvODEyd2l6MTZubEwuX0FDX1NMMTUwMF8uanBn.jpg"
            ],
            [
                'name'=>"Lg fridge",
                'price'=>"1350",
                'description'=>"A fridge with much more features",
                'category'=>"fridge",
                'gallery'=>"https://www.lg.com/au/images/fridges/md07506673/gallery/GF-V910MBL-1.jpg"
            ],
        ]);
    }
}
