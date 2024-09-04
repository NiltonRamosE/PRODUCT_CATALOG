<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;

class DashboardController extends Controller
{

    public function index()
    {
        $fecha = Carbon::now()->locale('es_ES')->isoFormat('dddd D [de] MMMM [de] YYYY');
        $totalProductos = Product::count();
        $totalCategorias = Category::count();
        $totalSubCategorias = SubCategory::count();

        $data = [
            'totalProductos' => $totalProductos,
            'totalCategorias' => $totalCategorias,
            'totalSubCategorias' => $totalSubCategorias,
            'fecha' => $fecha,
        ];

        return view('admin.admin-dashboard', compact('data'));
    }
}
