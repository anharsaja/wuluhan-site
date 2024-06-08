<?php

namespace App\Http\Controllers\Backend\pelum_controller\adminduk;

use App\Http\Controllers\Controller;
use App\Models\Pelum\Adminduk\CategoryAdminduk;
use Illuminate\Http\Request;

class CategoryAdmindukController extends Controller
{
    public function store(Request $request)
    {
        CategoryAdminduk::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryAdminduk::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryAdminduk::find($id);
        $category->delete();
        return back();
    }
}
