<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __invoke($category){
        //return "$category";
        $filter='<input type="radio" name="sex" value="0">Remove unisex';
        if($category == 3){
            //children :: age_group=0
            $products= Products::select('id', 'product_name', 'image_path', 'price')->where('age_group', 0)->inRandomOrder()->take(72)->get();
            $catTitle= "Children's wears";
            $filter = <<<_FIL
                            <input type="radio" name="sex" value="1">Female
                            <input type="radio" name="sex" value="2">Male
                        _FIL;
        }elseif($category == 2){
            //women :: age_group: aldut 1 & sex: unisex 0 Female 1 Male 2
            $products= Products::select('id', 'product_name', 'image_path', 'price')->where('age_group', 1)->whereIn('sex', [0, 1])->inRandomOrder()->take(72)->get();
            $catTitle= "Women's wears";
        }else{
             //Men :: age_group: aldut 1 & sex: unisex 0 Female 1 Male 2
            $products= Products::select('id', 'product_name', 'image_path', 'price')->where('age_group', 1)->whereIn('sex', [0,2])->inRandomOrder()->take(72)->get();
            $catTitle= "Men's wears";
        }
        return view('products.category',  ['products' => $products, 'catTitle' => $catTitle, 'filter' => $filter]);
    }
}
