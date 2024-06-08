<?php

namespace App\Http\Controllers\Backend\pemerintahan_controller\desa;

use App\Http\Controllers\Controller;
use App\Models\Pemerintahan\Desa\CategoryDesa;
use Illuminate\Http\Request;

class CategoryDesaController extends Controller
{
    public function store(Request $request)
    {
        CategoryDesa::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryDesa::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryDesa::find($id);
        $category->delete();
        return back();
    }
}
