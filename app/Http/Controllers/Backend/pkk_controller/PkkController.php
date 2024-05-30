<?php

namespace App\Http\Controllers\Backend\pkk_controller;

use App\Models\Pkk\SuratPkk;
use Illuminate\Http\Request;
use App\Models\Pkk\CategoryPkk;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class PkkController extends Controller
{
    public function index()
    {
        $category = CategoryPkk::get();
        $suratpkk = SuratPkk::get();
        return view('backend2.pages.pkk.index', ['categories' => $category, 'suratpkks' => $suratpkk, 'title' => 'Surat PKK']);
    }

    public function category($id)
    {
        $categoryName = CategoryPkk::find($id)->name;
        $category = CategoryPkk::get();
        $suratpkk = SuratPkk::where('category_id', $id)->get();
        return view('backend2.pages.pkk.index', ['categories' => $category, 'suratpkks' => $suratpkk, 'title' => 'Surat SOTK', 'categoryName' => $categoryName]);
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
                $files->move(public_path() . '/kumpulan_surat/file_pkk', $filename);

                SuratPkk::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'path_file' => '/kumpulan_surat/file_pkk/' . $filename
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
        $suratpkk = SuratPkk::find($id);
        $suratpkk->name = $request->name;
        $suratpkk->description = $request->description;
        $suratpkk->category_id = $request->category;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_pkk', $filename);

                $filesLama = public_path($suratpkk->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $suratpkk->path_file = '/kumpulan_surat/file_pkk/' . $filename;
            }
        };

        $suratpkk->save();
        return back();
    }

    public function destroy(string $id)
    {
        $suratpkk = SuratPkk::find($id);
        $filesLama = public_path($suratpkk->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $suratpkk->delete();
        return back();
    }
}
