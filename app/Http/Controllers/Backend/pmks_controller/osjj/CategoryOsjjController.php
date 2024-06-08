<?php

namespace App\Http\Controllers\Backend\pmks_controller\osjj;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pmks\Osjj\CategoryOsjj;

class CategoryOsjjController extends Controller
{
    public function store(Request $request)
    {
        CategoryOsjj::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryOsjj::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryOsjj::find($id);
        $category->delete();
        return back();
    }
}
