<?php

namespace App\Http\Controllers\Backend\trantib_controller\dokumentasi;

use App\Http\Controllers\Controller;
use App\Models\Sekretariat\Dokumentasi\CategoryDokumentasiSekretariat;
use App\Models\Trantib\Dokumentasi\CategoryDokuemntasiTrantib;
use Illuminate\Http\Request;

class CategoryDokumentasiTantribController extends Controller
{
    public function store(Request $request)
    {
        CategoryDokuemntasiTrantib::create([
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
