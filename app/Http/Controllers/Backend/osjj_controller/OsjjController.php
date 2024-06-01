<?php

namespace App\Http\Controllers\Backend\osjj_controller;

use Illuminate\Http\Request;
use App\Models\Osjj\SuratOsjj;
use App\Models\Osjj\CategoryOsjj;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class OsjjController extends Controller
{
    public function index()
    {
        $category = CategoryOsjj::get();
        $suratosjj = SuratOsjj::get();
        return view('backend2.pages.osjj.index', ['categories' => $category, 'suratosjjs' => $suratosjj, 'title' => 'Surat OSJJ']);
    }

    public function indexPublic()
    {
        $category = CategoryOsjj::get();
        $suratosjj = SuratOsjj::where('status', 'public')->get();
        return view('backend2.pages.osjj.index', ['categories' => $category, 'suratosjjs' => $suratosjj, 'title' => 'Surat OSJJ Public']);
    }

    public function indexPrivate()
    {
        $category = CategoryOsjj::get();
        $suratosjj = SuratOsjj::where('status', 'private')->get();
        return view('backend2.pages.osjj.index', ['categories' => $category, 'suratosjjs' => $suratosjj, 'title' => 'Surat OSJJ Private']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryOsjj::find($id)->name;
            $category = CategoryOsjj::get();
            $suratosjj = SuratOsjj::where('category_id', $id)->get();
            return view('backend2.pages.osjj.index', ['categories' => $category, 'suratosjjs' => $suratosjj, 'title' => 'Surat OSJJ', 'categoryName' => $categoryName]);
        } catch (\Throwable $th) {
            return redirect()->route('admin.osjj.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_osjj', $filename);

                SuratOsjj::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'path_file' => '/kumpulan_surat/file_osjj/' . $filename,
                    'status' => $request->status
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
        $suratosjj = SuratOsjj::find($id);
        $suratosjj->name = $request->name;
        $suratosjj->description = $request->description;
        $suratosjj->category_id = $request->category;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_osjj', $filename);

                $filesLama = public_path($suratosjj->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $suratosjj->path_file = '/kumpulan_surat/file_osjj/' . $filename;
            }
        };

        $suratosjj->save();
        return back();
    }


    public function destroy(string $id)
    {
        $suratosjj = SuratOsjj::find($id);
        $filesLama = public_path($suratosjj->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $suratosjj->delete();
        return back();
    }
}
