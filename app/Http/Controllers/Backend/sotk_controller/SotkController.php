<?php

namespace App\Http\Controllers\Backend\sotk_controller;

use App\Models\Sotk\SuratSotk;
use App\Models\Sotk\CategorySotk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class SotkController extends Controller
{
    public function index()
    {
        $category = CategorySotk::get();
        $suratsotk = SuratSotk::get();
        return view('backend2.pages.sotk.index', ['categories' => $category, 'suratsotks' => $suratsotk, 'title' => 'Surat SOTK']);
    }

    public function indexPublic()
    {
        $category = CategorySotk::get();
        $suratsotk = SuratSotk::where('status', 'public')->get();
        return view('backend2.pages.sotk.index', ['categories' => $category, 'suratsotks' => $suratsotk, 'title' => 'Surat SOTK']);
    }

        public function indexPrivate()
    {
        $category = CategorySotk::get();
        $suratsotk = SuratSotk::where('status', 'private')->get();
        return view('backend2.pages.sotk.index', ['categories' => $category, 'suratsotks' => $suratsotk, 'title' => 'Surat SOTK']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategorySotk::findOrFail($id)->name;
            $category = CategorySotk::get();
            $suratsotk = SuratSotk::where('category_id', $id)->get();
            return view('backend2.pages.sotk.index', ['categories' => $category, 'suratsotks' => $suratsotk, 'title' => 'Surat SOTK', 'categoryName' => $categoryName]);
        } catch (\Throwable $th) {
            return redirect()->route('admin.sotk.index');
        }
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
                $files->move(public_path() . '/kumpulan_surat/file_sotk', $filename);

                SuratSotk::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_sotk/' . $filename
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
        $suratsotk = SuratSotk::find($id);
        $suratsotk->name = $request->name;
        $suratsotk->description = $request->description;
        $suratsotk->category_id = $request->category;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_sotk', $filename);

                $filesLama = public_path($suratsotk->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $suratsotk->path_file = '/kumpulan_surat/file_sotk/' . $filename;
            }
        };

        $suratsotk->save();
        return back();
    }


    public function destroy(string $id)
    {
        $suratsotk = SuratSotk::find($id);
        $filesLama = public_path($suratsotk->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $suratsotk->delete();
        return back();
    }
}
