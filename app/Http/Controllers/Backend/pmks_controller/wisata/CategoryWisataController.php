<?php

namespace App\Http\Controllers\Backend\pmks_controller\wisata;

use App\Http\Controllers\Controller;
use App\Models\Pmks\Wisata\CategoryWisata;
use Illuminate\Http\Request;

class CategoryWisataController extends Controller
{
    public function store(Request $request)
    {
        CategoryWisata::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryWisata::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryWisata::find($id);
        $category->delete();
        return back();
    }
}
