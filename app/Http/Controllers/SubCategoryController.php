<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;

class SubCategoryController extends Controller
{

    public function index()
    {
        $subcategories = SubCategory::select('sub_categories.*', 'c.id as c_id', 'c.name as category_name')
        ->join('categories as c', 'c.id', '=', 'sub_categories.category_id')
        ->orderBy('sub_categories.id', 'asc')
        ->get();

        $categories = Category::all();

        return view('admin.manage-subcategories', compact('subcategories', 'categories'));
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'nombre' => 'required|string|max:35',
                'category_id' => 'required|integer',
            ]);

            $nombreSubCategoria = $request->input('nombre');

            if ($this->searchRepeatedSubcategories($nombreSubCategoria)) {
                return redirect()->back()->with('mensaje', 'No se pudo registrar la sub categoría, ya existe un registro con el mismo nombre');
            }

            SubCategory::create([
                'name' => $nombreSubCategoria,
                'category_id' => $request->input('category_id'),

            ]);

            return redirect()->back()->with('mensaje', 'La sub categoría se ha creado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('mensaje', 'No se pudo registrar la sub categoría, verifica si los campos están correctos.');
        }
    }

    public function update(Request $request, string $id)
    {
        try{
            $request->validate([
                'nombre' => 'required|string|max:35',
                'category_id' => 'required|integer',
            ]);

            $nombreSubCategoria = $request->input('nombre');

            if ($this->searchRepeatedSubcategories($nombreSubCategoria)) {
                return redirect()->back()->with('mensaje', 'No se pudo actualizar la sub categoría, ya existe un registro con el mismo nombre');
            }

            $subcategory = SubCategory::find($id);
            $subcategory->name = $nombreSubCategoria;
            $subcategory->category_id = $request->input('category_id');
            $subcategory->save();

            return redirect()->back()->with('mensaje', 'La sub categoría se ha actualizado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('mensaje', 'No se pudo actualizar la sub categoría, verifica si los campos están correctos.');
        }
    }

    public function destroy(string $id)
    {
        SubCategory::destroy($id);
        return redirect()->back()->with('mensaje', 'Sub categoría eliminada exitosamente.');
    }

    public function searchRepeatedSubcategories(string $name): bool
    {
        return SubCategory::where('name', $name)->exists();
    }
}
