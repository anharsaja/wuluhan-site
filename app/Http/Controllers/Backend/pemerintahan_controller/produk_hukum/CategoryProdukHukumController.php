<?php

namespace App\Http\Controllers\Backend\pemerintahan_controller\produk_hukum;

use App\Http\Controllers\Controller;
use App\Models\Pemerintahan\ProduHukum\CategoryProdukHukum;
use Illuminate\Http\Request;

class CategoryProdukHukumController extends Controller
{
    public function store(Request $request)
    {
        CategoryProdukHukum::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryProdukHukum::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryProdukHukum::find($id);
        $category->delete();
        return back();
    }
}
