<?php

namespace App\Http\Controllers\Backend\budaya_controller;

use Illuminate\Http\Request;
use App\Models\Budaya\SuratBudaya;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Budaya\CategoryBudaya;

class BudayaController extends Controller
{
    public function index()
    {
        $category = CategoryBudaya::get();
        $suratbudaya = SuratBudaya::get();
        return view('backend2.pages.budaya.index', ['categories' => $category, 'suratbudayas' => $suratbudaya, 'title' => 'Surat Budaya']);
    }

    public function category($id)
    {
        $categoryName = CategoryBudaya::find($id)->name;
        $category = CategoryBudaya::get();
        $suratbudaya = SuratBudaya::where('category_id', $id)->get();
        return view('backend2.pages.budaya.index', ['categories' => $category, 'suratbudayas' => $suratbudaya, 'title' => 'Surat Budaya', 'categoryName' => $categoryName]);
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_budaya', $filename);

                SuratBudaya::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'path_file' => '/kumpulan_surat/file_budaya/' . $filename
                ]);
                return back();
            } else {
                return back();
            }
        }
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $suratbudaya = SuratBudaya::find($id);
        $suratbudaya->name = $request->name;
        $suratbudaya->description = $request->description;
        $suratbudaya->category_id = $request->category;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_budaya', $filename);

                $filesLama = public_path($suratbudaya->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $suratbudaya->path_file = '/kumpulan_surat/file_budaya/' . $filename;
            }
        };

        $suratbudaya->save();
        return back();
    }


    public function destroy(string $id)
    {
        $suratbudaya = SuratBudaya::find($id);
        $filesLama = public_path($suratbudaya->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $suratbudaya->delete();
        return back();
    }
}
