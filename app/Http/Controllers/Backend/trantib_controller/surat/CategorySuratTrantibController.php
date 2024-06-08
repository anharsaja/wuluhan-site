<?php

namespace App\Http\Controllers\Backend\trantib_controller\surat;

use App\Http\Controllers\Controller;
use App\Models\Trantib\Surat\CategorySuratTrantib;
use Illuminate\Http\Request;

class CategorySuratTrantibController extends Controller
{
    public function store(Request $request)
    {
        CategorySuratTrantib::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategorySuratTrantib::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategorySuratTrantib::find($id);
        $category->delete();
        return back();
    }
}
