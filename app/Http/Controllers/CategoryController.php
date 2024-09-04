<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        
        return view('admin.manage-categories', compact('categories'));
    }

    public function store(Request $request)
    {
        try{
            $validatedData = $this->validateCategoryRequest($request);

            $nombreCategoria = $request->input('nombre');

            if ($this->searchRepeatedCategories($nombreCategoria)) {
                return redirect()->back()->with('mensaje', 'No se pudo registrar la categoría, ya existe un registro con el mismo nombre');
            }

            Category::create([
                'name' => $nombreCategoria,
                'description' => $request->input('descripcion'),
            ]);

            return redirect()->back()->with('mensaje', 'La categoría se ha creado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('mensaje', 'No se pudo registrar la categoría, verifica si los campos están correctos.');
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $validatedData = $this->validateCategoryRequest($request);

            $nombreCategoria = $request->input('nombre');
            
            if ($this->searchRepeatedCategories($nombreCategoria)) {
                return redirect()->back()->with('mensaje', 'No se pudo actualizar la categoría, ya existe un registro con el mismo nombre');
            }

            $category = Category::find($id);
            $category->update([
                'name' =>  $nombreCategoria,
                'description' => $request->input('descripcion'),
            ]);

            return redirect()->back()->with('mensaje', 'La categoría se ha actualizado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('mensaje', 'No se pudo actualizar el usuario, verifica si los campos están correctos.');
        }
        
    }

    public function destroy(string $id)
    {
        Category::destroy($id);

        return redirect()->back()->with('mensaje', 'Categoría eliminada exitosamente.');
    }

    public function searchRepeatedCategories(string $name): bool
    {
        return Category::where('name', $name)->exists();
    }

    protected function validateCategoryRequest(Request $request)
    {
        return $request->validate([
            'nombre' => 'required|string|max:35',
            'descripcion' => 'required|string',
        ]);
    }
}
