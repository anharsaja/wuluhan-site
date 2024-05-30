<?php

namespace App\Http\Controllers\Backend\wisata_controller;

use Illuminate\Http\Request;
use App\Models\Wisata\SuratWisata;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Wisata\CategoryWisata;

class WisataController extends Controller
{
    public function index()
    {
        $category = CategoryWisata::get();
        $suratwisata = SuratWisata::get();
        return view('backend2.pages.wisata.index', ['categories' => $category, 'suratwisatas' => $suratwisata, 'title' => 'Surat Wisata']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryWisata::find($id)->name;
            $category = CategoryWisata::get();
            $suratwisata = SuratWisata::where('category_id', $id)->get();
            return view('backend2.pages.wisata.index', ['categories' => $category, 'suratwisatas' => $suratwisata, 'title' => 'Surat Wisata', 'categoryName' => $categoryName]);
        } catch (\Throwable $th) {
            return redirect()->route('admin.wisata.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_wisata', $filename);

                SuratWisata::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'path_file' => '/kumpulan_surat/file_wisata/' . $filename
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
        $suratwisata = SuratWisata::find($id);
        $suratwisata->name = $request->name;
        $suratwisata->description = $request->description;
        $suratwisata->category_id = $request->category;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_wisata', $filename);

                $filesLama = public_path($suratwisata->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $suratwisata->path_file = '/kumpulan_surat/file_wisata/' . $filename;
            }
        };

        $suratwisata->save();
        return back();
    }


    public function destroy(string $id)
    {
        $suratwisata = SuratWisata::find($id);
        $filesLama = public_path($suratwisata->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $suratwisata->delete();
        return back();
    }
}
