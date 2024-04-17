<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                'price'=>'300',
                'category'=>'mobile',
                'description'=>'A smart phone with 8 gb ram',
                'gallery'=>'https://5.imimg.com/data5/SELLER/PDFImage/2023/7/321974106/PG/IF/ND/188924882/oppo-mobile-phones.png'
            ],
            [
                'name'=>'Sony Tv',
                'price'=>'800',
                'category'=>'Tv',
                'description'=>'Smart Tv with high congigurations',
                'gallery'=>'https://www.sony.co.in/image/88de0249f4df8101f60bccc4aaa57779?fmt=pjpeg&wid=330&bgcolor=FFFFFF&bgc=FFFFFF'
            ],
            [
                'name'=>'Acer',
                'price'=>'700',
                'category'=>'Laptop',
                'description'=>'A Laptop with 32 gb ram and 512 gb Memory',
                'gallery'=>'https://i.gadgets360cdn.com/products/large/Acer-Aspire-7-DB-749x800-1614338241.jpg'
             ]
        ]);
    }
}
