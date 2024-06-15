<?php

namespace App\Http\Controllers\Backend\pmks_controller\dokumentasi;

use App\Http\Controllers\Controller;
use App\Models\Pmks\Dokumentasi\CategoryDokumentasiPmks;
use Illuminate\Http\Request;

class CategoryDokumentasiPmksController extends Controller
{
    public function store(Request $request)
    {
        CategoryDokumentasiPmks::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryDokumentasiPmks::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryDokumentasiPmks::find($id);
        $category->delete();
        return back();
    }
}