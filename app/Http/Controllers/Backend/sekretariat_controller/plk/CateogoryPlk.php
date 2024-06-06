<?php

namespace App\Http\Controllers\Backend\sekretariat_controller;

use App\Http\Controllers\Controller;
use App\Models\Sotk\CategorySotk;
use Illuminate\Http\Request;

class CategorySekretariat extends Controller
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
