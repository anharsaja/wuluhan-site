<?php

namespace App\Http\Controllers\Backend\trantib_controller\dokumentasi;

use App\Http\Controllers\Controller;
use App\Models\Trantib\Dokumentasi\CategoryDokumentasiTrantib;
use Illuminate\Http\Request;

class CategoryDokumentasiTantribController extends Controller
{
    public function store(Request $request)
    {
        CategoryDokumentasiTrantib::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryDokumentasiTrantib::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryDokumentasiTrantib::find($id);
        $category->delete();
        return back();
    }
}
