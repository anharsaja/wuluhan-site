<?php

namespace App\Http\Controllers\Backend\pemerintahan_controller\rapbdes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Pemerintahan\Rapbdes\SuratRapbdes;
use App\Models\Pemerintahan\Rapbdes\CategoryRapbdes;

class RapbdesController extends Controller
{
    public function index()
    {
        $category = CategoryRapbdes::get();
        $surat = SuratRapbdes::get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'RAPBDES', 'name' => 'rapbdes']);
    }

    public function indexPublic()
    {
        $category = CategoryRapbdes::get();
        $surat = SuratRapbdes::where('status', 'public')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'RAPBDES - Public', 'name' => 'rapbdes']);
    }

        public function indexPrivate()
    {
        $category = CategoryRapbdes::get();
        $surat = SuratRapbdes::where('status', 'private')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'RAPBDES - Private', 'name' => 'rapbdes']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryRapbdes::findOrFail($id)->name;
            $category = CategoryRapbdes::get();
            $surat = SuratRapbdes::where('category_id', $id)->get();
            return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'RAPBDES', 'categoryName' => $categoryName, 'name' => 'rapbdes']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.rapbdes.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_rapbdes', $filename);

                SuratRapbdes::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_rapbdes/' . $filename
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
        $surat = SuratRapbdes::find($id);
        $surat->name = $request->name;
        $surat->description = $request->description;
        $surat->category_id = $request->category;
        $surat->status = $request->status;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_rapbdes', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_rapbdes/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratRapbdes::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
