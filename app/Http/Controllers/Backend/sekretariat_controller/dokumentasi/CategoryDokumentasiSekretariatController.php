<?php

namespace App\Http\Controllers\Backend\sekretariat_controller\dokumentasi;

use App\Http\Controllers\Controller;
use App\Models\Sekretariat\Dokumentasi\CategoryDokumentasiSekretariat;
use Illuminate\Http\Request;

class CategoryDokumentasiSekretariatController extends Controller
{
    public function store(Request $request)
    {
        CategoryDokumentasiSekretariat::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryDokumentasiSekretariat::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryDokumentasiSekretariat::find($id);
        $category->delete();
        return back();
    }
}
