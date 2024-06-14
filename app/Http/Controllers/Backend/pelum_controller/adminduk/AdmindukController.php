<?php

namespace App\Http\Controllers\Backend\pelum_controller\adminduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Pelum\Adminduk\SuratAdminduk;
use App\Models\Pelum\Adminduk\CategoryAdminduk;

class AdmindukController extends Controller
{
    public function index()
    {
        $category = CategoryAdminduk::get();
        $surat = SuratAdminduk::get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'ADMINDUK', 'name' => 'adminduk']);
    }

    public function indexPublic()
    {
        $category = CategoryAdminduk::get();
        $surat = SuratAdminduk::where('status', 'public')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'ADMINDUK - Public', 'name' => 'adminduk']);
    }

        public function indexPrivate()
    {
        $category = CategoryAdminduk::get();
        $surat = SuratAdminduk::where('status', 'private')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'ADMINDUK - Private', 'name' => 'adminduk']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryAdminduk::findOrFail($id)->name;
            $category = CategoryAdminduk::get();
            $surat = SuratAdminduk::where('category_id', $id)->get();
            return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'ADMINDUK', 'categoryName' => $categoryName, 'name' => 'adminduk']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.adminduk.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_adminduk', $filename);

                SuratAdminduk::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_adminduk/' . $filename
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
        $surat = SuratAdminduk::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_adminduk', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_adminduk/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratAdminduk::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
