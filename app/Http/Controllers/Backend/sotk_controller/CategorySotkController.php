<?php

namespace App\Http\Controllers\Backend\sotk_controller;

use App\Http\Controllers\Controller;
use App\Models\CategorySotk;
use Illuminate\Http\Request;

class CategorySotkController extends Controller
{
    public function store(Request $request)
    {
        CategorySotk::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategorySotk::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategorySotk::find($id);
        $category->delete();
        return back();
    }
}
