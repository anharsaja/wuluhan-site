<?php

namespace App\Http\Controllers\Backend\pmks_controller\budaya;

use App\Http\Controllers\Controller;
use App\Models\Pmks\Budaya\CategoryBudaya;
use Illuminate\Http\Request;

class CategoryBudayaController extends Controller
{
    public function store(Request $request)
    {
        CategoryBudaya::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryBudaya::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryBudaya::find($id);
        $category->delete();
        return back();
    }
}
