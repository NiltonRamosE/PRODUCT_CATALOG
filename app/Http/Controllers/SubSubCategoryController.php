<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Models\SubCategory;

class SubSubCategoryController extends Controller
{
    public function index()
    {
        $subsubcategories = SubSubCategory::select('sub_sub_categories.*', 'sc.id as sc_id', 'sc.name as subcategory_name')
        ->join('sub_categories as sc', 'sc.id', '=', 'sub_sub_categories.sub_category_id')
        ->orderBy('sub_sub_categories.id', 'asc')
        ->get();

        $subcategories = SubCategory::all();

        return view('admin.manage-subsubcategories', compact('subsubcategories', 'subcategories'));
    }

    public function store(Request $request)
    {
        try{
            $validatedData = $this->validateSubSubCategoryRequest($request);

            $nombreSubSubCategoria = $request->input('nombre');

            SubSubCategory::create([
                'name' => $nombreSubSubCategoria,
                'sub_category_id' => $request->input('sub_category_id'),
            ]);

            return redirect()->back()->with('mensaje', 'La sub sub categoría se ha creado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('mensaje', 'No se pudo registrar la sub sub categoría, verifica si los campos están correctos.');
        }
    }

    public function update(Request $request, string $id)
    {
        try{
            $validatedData = $this->validateSubSubCategoryRequest($request);

            $nombreSubSubCategoria = $request->input('nombre');

            $subsubcategory = SubSubCategory::find($id);
            $subsubcategory->update([
                'name' =>  $nombreSubSubCategoria,
                'sub_category_id' => $request->input('sub_category_id'),
            ]);

            return redirect()->back()->with('mensaje', 'La sub sub categoría se ha actualizado correctamente.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->with('mensaje', 'No se pudo actualizar la sub sub categoría, verifica si los campos están correctos.');
        }
    }

    public function destroy(string $id)
    {
        SubSubCategory::destroy($id);
        return redirect()->back()->with('mensaje', 'Sub Sub categoría eliminada exitosamente.');
    }

    protected function validateSubSubCategoryRequest(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:35',
            'sub_category_id' => 'required|integer',
        ]);
    }
}
