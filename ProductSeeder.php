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
                'name'=>'Oppo mobile',
                "price"=>"300",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://www.91-img.com/pictures/134124-v5-oppo-k3-mobile-phone-large-1.jpg?tr=q-60"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"400",
                "description"=>"A TV with much more feature",
                "category"=>"tv",
                "gallery"=>"https://cdn.pricekart.com/electronics/televisions/panasonic-th43ex601d-43-inch-ultra-hd-4k-led-tv.jpg"
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"500",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://m.media-amazon.com/images/I/81lK-w3btdL._AC_SS450_.jpg"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"200",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://www.chocolatefurnish.com/pub/media/catalog/product/cache/small_image/300x400/beff4985b56e3afdbeabfc89641a4582/i/m/img_0845_1_1.jpg"
             ]
        ]);
        //
    }
}
