<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products= [
            [
                'product_name' => 'Men classic watch',
                'description' => 'This is a lomg nsjfvhnjhljhilshjnf fkehfoeho nnkn jkenkjn  mkfvnkejbfkvbbefkjvbkjebkfvbk kdbvkj djnkjenkjnnei enokn',
                'image_path' => '../images/product/underwears.png',
                'brand' => 'D&G',
                'price' => 100,
                'quantity' => 50,
                'age_group' => 0,
                'sex' => 1
            ],
            [
                'product_name' => 'woMen classic watch',
                'description' => 'This is a lomg nsjfvhnjhljhilshjnf fkehfoeho nnkn jkenkjn  mkfvnkejbfkvbbefkjvbkjebkfvbk kdbvkj djnkjenkjnnei enokn',
                'image_path' => '../images/product/maletop.png',
                'brand' => 'Addidas',
                'price' => 200,
                'quantity' => 80,
                'age_group' => 1,
                'sex' => 0
            ]
        ];

        foreach($products as $key => $val){
            Products::create($val);
        }
    }
}
