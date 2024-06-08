<?php

namespace App\Http\Controllers\Backend\trantib_controller\dokumentasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Trantib\Dokumentasi\DokumentasiTrantib;
use App\Models\Trantib\Dokumentasi\CategoryDokumentasiTrantib;

class DokumentasiTantribController extends Controller
{
    public function index()
    {
        $category = CategoryDokumentasiTrantib::get();
        $surat = DokumentasiTrantib::get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'FOTO TANTRIB', 'name' => 'trantib.dokumentasi']);
    }

    public function indexPublic()
    {
        $category = CategoryDokumentasiTrantib::get();
        $surat = DokumentasiTrantib::where('status', 'public')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'FOTO TANTRIB - Public', 'name' => 'trantib.dokumentasi']);
    }

        public function indexPrivate()
    {
        $category = CategoryDokumentasiTrantib::get();
        $surat = DokumentasiTrantib::where('status', 'private')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'FOTO TANTRIB - Private', 'name' => 'trantib.dokumentasi']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryDokumentasiTrantib::findOrFail($id)->name;
            $category = CategoryDokumentasiTrantib::get();
            $surat = DokumentasiTrantib::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'FOTO TANTRIB', 'categoryName' => $categoryName, 'name' => 'trantib.dokumentasi']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.trantib.dokumentasi.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_dokumentasi_tantrib', $filename);

                DokumentasiTrantib::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_dokumentasi_tantrib/' . $filename
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
        $surat = DokumentasiTrantib::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_dokumentasi_tantrib', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_dokumentasi_tantrib/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = DokumentasiTrantib::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
