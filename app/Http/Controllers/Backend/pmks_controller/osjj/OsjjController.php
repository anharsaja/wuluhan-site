<?php

namespace App\Http\Controllers\Backend\pmks_controller\osjj;

use Illuminate\Http\Request;
use App\Models\Pmks\Osjj\SuratOsjj;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Pmks\Osjj\CategoryOsjj;

class OsjjController extends Controller
{
    public function index()
    {
        $category = CategoryOsjj::get();
        $surat = SuratOsjj::get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'OSJJ', 'name' => 'osjj']);
    }

    public function indexPublic()
    {
        $category = CategoryOsjj::get();
        $surat = SuratOsjj::where('status', 'public')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'OSJJ - Public', 'name' => 'osjj']);
    }

        public function indexPrivate()
    {
        $category = CategoryOsjj::get();
        $surat = SuratOsjj::where('status', 'private')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'OSJJ - Private', 'name' => 'osjj']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryOsjj::findOrFail($id)->name;
            $category = CategoryOsjj::get();
            $surat = SuratOsjj::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'OSJJ', 'categoryName' => $categoryName, 'name' => 'osjj']);
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
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_osjj/' . $filename
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
        $surat = SuratOsjj::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_osjj', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_osjj/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratOsjj::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
