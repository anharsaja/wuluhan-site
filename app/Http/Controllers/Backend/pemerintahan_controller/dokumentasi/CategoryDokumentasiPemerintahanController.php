<?php

namespace App\Http\Controllers\Backend\pemerintahan_controller\dokumentasi;

use App\Http\Controllers\Controller;
use App\Models\Pemerintahan\Dokumentasi\CategoryDokumentasiPemerintahan;
use Illuminate\Http\Request;

class CategoryDokumentasiPemerintahanController extends Controller
{
    public function store(Request $request)
    {
        CategoryDokumentasiPemerintahan::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryDokumentasiPemerintahan::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryDokumentasiPemerintahan::find($id);
        $category->delete();
        return back();
    }
}
