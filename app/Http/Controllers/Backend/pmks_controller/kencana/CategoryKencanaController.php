<?php

namespace App\Http\Controllers\Backend\pmks_controller\kencana;

use App\Http\Controllers\Controller;
use App\Models\Pmks\Kencana\CategoryKencana;
use Illuminate\Http\Request;

class CategoryKencanaController extends Controller
{
    public function store(Request $request)
    {
        CategoryKencana::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function update(Request $request, $id)
    {
        $category = CategoryKencana::find($id);
        $category->name = $request->name;
        $category->save();
        return back();
    }

    public function delete($id)
    {
        $category = CategoryKencana::find($id);
        $category->delete();
        return back();
    }
}
