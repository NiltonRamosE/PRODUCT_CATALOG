<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Image;

class ShopProductController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('shop.shop_product', compact('categories'));
    }

    public function showSubCategoriesByCategory(string $id)
    {
        $subCategories = SubCategory::where('category_id', $id)->get();
        
        return response()->json($subCategories);
    }

    public function showAllProducts()
    {
        $products = Product::all();

        foreach ($products as $product) {
            $product->image = $this->getProductImages($product, true);
        }

        return response()->json($products);
    }

    public function showProductByCategories(string $id)
    {
        $products = Product::select('products.*', 'c.id as c_id', 'c.name as c_name')
        ->join('sub_categories as sc', 'products.sub_category_id', '=', 'sc.id')
        ->join('categories as c', 'sc.category_id', '=', 'c.id')
        ->whereIn('products.sub_category_id', function($query) use ($id){
            $query->select('sc2.id')
                ->from('sub_categories as sc2')
                ->where('sc2.category_id', $id);
        })
        ->get();

        foreach ($products as $product) {
            $product->image = $this->getProductImages($product, true);
        }

        return response()->json($products);
    }

    public function showProductBySubCategories(string $id)
    {
        $products = Product::select('products.*', 'c.id as c_id', 'sc.id as sc_id', 'sc.name as sc_name','c.name as c_name')
        ->join('sub_categories as sc', 'products.sub_category_id', '=', 'sc.id')
        ->join('categories as c', 'sc.category_id', '=', 'c.id')
        ->where('products.sub_category_id', $id)->get();

        foreach ($products as $product) {
            $product->image = $this->getProductImages($product, true);
        }

        return response()->json($products);
    }

    public function showProductSpecific(string $id)
    {
        $product = Product::select('products.*', 'sc.id as sc_id', 'sc.name as sc_name', 'c.id as c_id', 'c.name as c_name')
        ->join('sub_categories as sc', 'products.sub_category_id', '=', 'sc.id')
        ->join('categories as c', 'sc.category_id', '=', 'c.id')
        ->where('products.id', $id)
        ->first();

        $product->image = $this->getProductImages($product);
        
        return view('shop.shop_description_product', compact('product'));
    }

    
    private function getProductImages(Product $product, bool $single = false)
    {
        $query = Image::whereIn('id', function($query) use ($product) {
            $query->select('image_id')
                ->from('images_products')
                ->where('product_id', $product->id);
        });

        if ($single) {
            return $query->first() ? asset($query->first()->route) : null;
        } else {
            return $query->get()->map(function($image) {
                return asset($image->route);
            });
        }
    }
}
