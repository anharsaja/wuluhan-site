<?php

namespace App\Http\Controllers\Backend\sekretariat_controller\umpeg;

use App\Http\Controllers\Controller;
use App\Models\Sekretariat\Umpeg\CategoryUmpeg;
use Illuminate\Http\Request;

class CategoryUmpegController extends Controller
{
    public function store(Request $request)
    {
        CategoryUmpeg::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryUmpeg::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryUmpeg::find($id);
        $category->delete();
        return back();
    }
}
