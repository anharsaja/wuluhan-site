<?php

namespace App\Http\Controllers\Backend\osjj_controller;

use App\Http\Controllers\Controller;
use App\Models\Osjj\CategoryOsjj;
use Illuminate\Http\Request;

class CategoryOsjjController extends Controller
{
    public function store(Request $request)
    {
        CategoryOsjj::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryOsjj::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryOsjj::find($id);
        $category->delete();
        return back();
    }
}
