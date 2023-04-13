<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Products::select('id', 'product_name', 'image_path', 'price')->inRandomOrder()->take(72)->get();
        $topSale= Products::join('orders', 'products.id', '=', 'orders.product_id')->select('id', 'product_name', 'image_path', 'price')->orderBy('total_order', 'desc')->take(20)->get();
        return view('products.index', ['products' => $products, 'topSale' => $topSale]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //Get product informations
        //$prod= Products::findOrFail($id) equivalent show(Products $products) ....Route model Binding
        
        //Advertise related product
        $RelProd= Products::select('id', 'product_name', 'image_path', 'price')
            ->where('id','!=', $products->id)
            ->Where(function($query) use ($products){
                $query->orWhere('age_group', $products->age_group)
                ->orWhere('sex', $products->sex)
                ->orWhere('brand', $products->brand);
            })
           ->inRandomOrder()->take(36)->get();

        //check for sex
        if($products->sex == 0){
            $products->sex= "unisex";
        }elseif($products->sex == 1){
            $products->sex= "Female";
        }else{
            $products->sex= "Male";
        }

        //Age classification
        if($products->age_group == 0){
            $products->age_group= "Children's wear";
        }else{
            $products->age_group= "Adult's wear";
        }

        //Available qunatity for order
        if( $products->quantity > 1){
            $products->quantity= $products->quantity." stocks available";
        }elseif($products->quantity == 1){
            $products->quantity= $products->quantity." stock available";
        }else{
            $products->quantity= " Stock not available";
        }
        //dd($products);
        return view('products.product',  ['prod' => $products, 'products' => $RelProd]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
