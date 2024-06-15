<?php

namespace App\Http\Controllers\Backend\pelum_controller\dokumentasi;

use App\Http\Controllers\Controller;
use App\Models\Pelum\Dokumentasi\CategoryDokumentasiPelum;
use Illuminate\Http\Request;

class CategoryDokumentasiPelumController extends Controller
{
    public function store(Request $request)
    {
        CategoryDokumentasiPelum::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryDokumentasiPelum::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryDokumentasiPelum::find($id);
        $category->delete();
        return back();
    }
}