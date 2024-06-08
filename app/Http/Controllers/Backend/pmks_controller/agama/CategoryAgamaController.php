<?php

namespace App\Http\Controllers\Backend\pmks_controller\agama;

use App\Http\Controllers\Controller;
use App\Models\Pmks\Agama\CategoryAgama;
use Illuminate\Http\Request;

class CategoryAgamaController extends Controller
{
    public function store(Request $request)
    {
        CategoryAgama::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryAgama::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryAgama::find($id);
        $category->delete();
        return back();
    }
}
