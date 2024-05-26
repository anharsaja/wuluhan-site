<?php

namespace App\Http\Controllers\Backend\umkm_controller;

use App\Http\Controllers\Controller;
use App\Models\CategoryUmkm;
use Illuminate\Http\Request;

class CategoryUmkmController extends Controller
{
    public function store(Request $request)
    {
        CategoryUmkm::create([
            'name' => $request->name
        ]);
        return back();
    }


    public function update(Request $request, $id)
    {
        $category = CategoryUmkm::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryUmkm::find($id);
        $category->delete();
        return back();
    }
}
