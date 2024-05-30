<?php

namespace App\Http\Controllers\Backend\ktb_controller;

use App\Http\Controllers\Controller;
use App\Models\Ktb\CategoryKtb;
use Illuminate\Http\Request;

class CategoryKtbController extends Controller
{
    public function store(Request $request)
    {
        CategoryKtb::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryKtb::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryKtb::find($id);
        $category->delete();
        return back();
    }
}
