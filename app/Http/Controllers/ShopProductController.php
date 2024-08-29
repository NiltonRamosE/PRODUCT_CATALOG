<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubCategoriesProduct;
use App\Models\Image;
use App\Models\ImagesProduct;

class ShopProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('shop.shop_product', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function showSubCategories(string $id)
    {
        $subCategories = SubCategory::where('category_id', $id)->get();
        return response()->json($subCategories);
    }

    public function showProducts()
    {
        $products = Product::all();

        foreach ($products as $product) {
            $image = Image::whereIn('id', function($query) use ($product) {
                $query->select('image_id')
                    ->from('images_products')
                    ->where('product_id', $product->id);
            })->first();

            $product->image = asset($image->route);
        }

        return response()->json($products);
    }

    public function showProductByCategories(string $id)
    {
        $products = Product::whereIn('id', function($query) use ($id){
            $query->select('scp.product_id')
                ->from('sub_categories_products as scp')
                ->whereIn('scp.sub_category_id', function($query) use ($id){
                    $query->select('sc.id')
                        ->from('sub_categories as sc')
                        ->where('sc.category_id', $id);
                });
        })->get();

        foreach ($products as $product) {
            $image = Image::whereIn('id', function($query) use ($product) {
                $query->select('image_id')
                    ->from('images_products')
                    ->where('product_id', $product->id);
            })->first();

            $product->image = asset($image->route);
        }
        
        return response()->json($products);
    }

    public function showProductSpecific(string $id)
    {
        $product = Product::find($id);

        $images = Image::whereIn('id', function($query) use ($product) {
            $query->select('image_id')
                ->from('images_products')
                ->where('product_id', $product->id);
        })->get();

        $product->image = $images->map(function($image) {
            return asset($image->route);
        });
        
        return view('shop.shop_description_product', compact('product'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
