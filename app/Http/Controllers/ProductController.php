<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Image;
use App\Models\ImagesProduct;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Cloudinary\Api\Admin\AdminApi;
use Illuminate\Http\UploadedFile;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::select('products.*', 'ssc.id as ssc_id', 'ssc.name as subsubcategory_name')
        ->join('sub_sub_categories as ssc', 'ssc.id', '=', 'products.sub_sub_category_id')
        ->get();

        $images = Image::select('images.*', 'images_products.product_id')
        ->join('images_products', 'images.id', '=', 'images_products.image_id')
        ->get()
        ->groupBy('product_id');

        $subsubcategories = SubSubCategory::all();

        return view('admin.manage-products', compact('products', 'subsubcategories', 'images'));
    }

    public function store(Request $request)
    {
        try{

            $validatedData = $this->validateProductRequest($request);

            $sub_sub_category_id = $request->input('sub_sub_category_id');

            $subsubCategory = SubSubCategory::select('sub_sub_categories.name as subsubcategory_name','sc.name as subcategory_name', 'c.name as category_name')
            ->join('sub_categories as sc', 'sc.id', '=', 'sub_sub_categories.sub_category_id')
            ->join('categories as c', 'c.id', '=', 'sc.category_id')
            ->where('sub_sub_categories.id', $sub_sub_category_id)
            ->first();

            // Generar el código
            $categoryName = strtoupper(substr($subsubCategory->category_name, 0, 5));
            $subcategoryInitials = strtoupper(implode('', array_map(function($word) {
                return $word[0];
            }, explode(' ', $subsubCategory->subcategory_name))));
            $subsubcategoryName = strtoupper(substr($subsubCategory->subsubcategory_name, 0, 3));
            
            $latestProduct = Product::latest('id')->first();
            $nextNumber = $latestProduct ? str_pad((int)substr($latestProduct->code, -5) + 1, 5, '0', STR_PAD_LEFT) : '00001';

            $code = $categoryName . '_' . $subcategoryInitials. '_' . $subsubcategoryName . '_' . $nextNumber;

            $newProduct = Product::create([
                'sub_sub_category_id' => $sub_sub_category_id,
                'code' => $code,
                'name' => $request->input('nombre'),
                'description' => $request->input('descripcion'),
                'price' => $request->input('precio'),
                'active' => true,
            ]);

            $this->createImagesProducts($request, $newProduct);

            return redirect()->back()->with('mensaje', 'El producto se ha creado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('mensaje', 'No se pudo registrar el producto, verifica si los campos están correctos.' . $e->getMessage());
        }
    }

    public function update(Request $request, string $id)
    {
        try{

            $validatedData = $this->validateProductRequest($request);

            $product = Product::find($id);

            $product->update([
                'sub_sub_category_id' => $request->input('sub_sub_category_id'),
                'code' => $product->code,
                'name' => $request->input('nombre'),
                'description' => $request->input('descripcion'),
                'price' => $request->input('precio'),
            ]);

            $images = $this->getProductImages($product);

            $imageCount = $images->count();

            if($imageCount > 0){
                for ($i = 1; $i <= $imageCount; $i++) {
                    $imageInputName = 'imagen_' . $i;
                    if ($request->hasFile($imageInputName)) {
                        $newImage = $request->file($imageInputName);
        
                        try {
                            $currentImage = $images[$i - 1];
                            Cloudinary::destroy( $currentImage->public_id);
        
                            $result = $this->uploadCloudinaryImage($newImage, $product->code);

                            $currentImage->update([
                                'public_id' =>$result['public_id'],
                                'route' => $result['url'],
                            ]);
                            
                        } catch (\Exception $e) {
                            return redirect()->back()->with('mensaje', 'Error al subir la imagen: ' . $e->getMessage());
                        }
                    }
                }
            }else{
                $this->createImagesProducts($request, $product);
            }

            return redirect()->back()->with('mensaje', 'El producto se ha actualizado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('mensaje', 'No se pudo actualizar el producto, verifica si los campos están correctos.' . $e->getMessage());
        }
    }

    public function destroy(string $id)
    {
        $product = Product::find($id);

        $images = $this->getProductImages($product);

        $imageCount = $images->count();

        if($imageCount > 0){
            for ($i = 1; $i <= $imageCount; $i++) {
                Cloudinary::destroy( $images[$i - 1]->public_id);
                Image::destroy($images[$i - 1]->id);
            }

            $adminApi = new AdminApi();
            try {
                $adminApi->deleteFolder($product->code);
            } catch (\Exception $e) {
                return response()->json(['error' => 'Error al eliminar la carpeta: ' . $e->getMessage()], 500);
            }
        }

        Product::destroy($id);
        
        return redirect()->back()->with('mensaje', 'Producto eliminado exitosamente.');
    }

    protected function uploadCloudinaryImage(UploadedFile $image, string $code){

        $obj = Cloudinary::upload($image->getRealPath(), ['folder' => $code]);
        $public_id = $obj->getPublicId();
        $url = $obj->getSecurePath();

        return [
            'public_id' => $public_id,
            'url' => $url,
        ];
    }

    protected function getProductImages(Product $product)
    {
        $images = Image::select('images.*')
            ->join('images_products as ip', 'images.id', '=', 'ip.image_id')
            ->where('ip.product_id', $product->id)
            ->orderBy('images.id')
            ->get();

        return $images;
    }

    protected function validateProductRequest(Request $request)
    {
        return $request->validate([
            'sub_sub_category_id' => 'required|exists:sub_sub_categories,id',
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string',
            'precio' => 'required|numeric|min:0',
            'imagen_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'imagen_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'imagen_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'imagen_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'imagen_5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'imagen_6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
    }

    protected function createImagesProducts(Request $request, Product $newProduct){

        for ($i = 1; $i <= 6; $i++) {
            $imageInputName = 'imagen_' . $i;
            if ($request->hasFile($imageInputName)) {
                $image = $request->file($imageInputName);

                try {
                    $result = $this->uploadCloudinaryImage($image, $newProduct->code);

                    $newImage = Image::create([
                        'public_id' => $result['public_id'],
                        'route' => $result['url'],
                    ]);

                    ImagesProduct::create([
                        'product_id' => $newProduct->id,
                        'image_id' => $newImage->id,
                    ]);
                } catch (\Exception $e) {
                    return redirect()->back()->with('mensaje', 'Error al subir la imagen: ' . $e->getMessage());
                }
            }
        }
    }
}
