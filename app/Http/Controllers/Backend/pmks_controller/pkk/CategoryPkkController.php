<?php

namespace App\Http\Controllers\Backend\pmks_controller\pkk;

use App\Http\Controllers\Controller;
use App\Models\Pmks\Pkk\CategoryPkk;
use Illuminate\Http\Request;

class CategoryPkkController extends Controller
{
    public function store(Request $request)
    {
        CategoryPkk::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryPkk::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryPkk::find($id);
        $category->delete();
        return back();
    }
}
