<?php

namespace App\Http\Controllers\Backend\sekretariat_controller\plk;

use App\Http\Controllers\Controller;
use App\Models\Sekretariat\Plk\CategoryPlk;
use Illuminate\Http\Request;

class CategoryPlkController extends Controller
{
    public function store(Request $request)
    {
        CategoryPlk::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryPlk::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryPlk::find($id);
        $category->delete();
        return back();
    }
}
