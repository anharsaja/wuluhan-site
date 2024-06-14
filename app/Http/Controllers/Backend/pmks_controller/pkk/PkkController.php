<?php

namespace App\Http\Controllers\Backend\pmks_controller\pkk;

use Illuminate\Http\Request;
use App\Models\Pmks\Pkk\SuratPkk;
use App\Http\Controllers\Controller;
use App\Models\Pmks\Pkk\CategoryPkk;
use Illuminate\Support\Facades\File;

class PkkController extends Controller
{
    public function index()
    {
        $category = CategoryPkk::get();
        $surat = SuratPkk::get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'PKK', 'name' => 'pkk']);
    }

    public function indexPublic()
    {
        $category = CategoryPkk::get();
        $surat = SuratPkk::where('status', 'public')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'PKK - Public', 'name' => 'pkk']);
    }

        public function indexPrivate()
    {
        $category = CategoryPkk::get();
        $surat = SuratPkk::where('status', 'private')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'PKK - Private', 'name' => 'pkk']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryPkk::findOrFail($id)->name;
            $category = CategoryPkk::get();
            $surat = SuratPkk::where('category_id', $id)->get();
            return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'PKK', 'categoryName' => $categoryName, 'name' => 'pkk']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.pkk.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_desa', $filename);

                SuratPkk::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_desa/' . $filename
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
        $surat = SuratPkk::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_desa', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_desa/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratPkk::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
