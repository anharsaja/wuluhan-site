<?php

namespace App\Http\Controllers\Backend\pemerintahan_controller\rapbdes;

use App\Http\Controllers\Controller;
use App\Models\Pemerintahan\Rapbdes\CategoryRapbdes;
use Illuminate\Http\Request;

class CategoryRapbdesController extends Controller
{
    public function store(Request $request)
    {
        CategoryRapbdes::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryRapbdes::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryRapbdes::find($id);
        $category->delete();
        return back();
    }
}
