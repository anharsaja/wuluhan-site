<?php

namespace App\Http\Controllers\Backend\sekretariat_controller\dokumentasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Sekretariat\Dokumentasi\DokumentasiSekretariat;
use App\Models\Sekretariat\Dokumentasi\CategoryDokumentasiSekretariat;

class DokumentasiSekretariatController extends Controller
{
    public function index()
    {
        $category = CategoryDokumentasiSekretariat::get();
        $surat = DokumentasiSekretariat::get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Dokumentasi', 'name' => 'dokumentasi.sekretariat']);
    }

    public function indexPublic()
    {
        $category = CategoryDokumentasiSekretariat::get();
        $surat = DokumentasiSekretariat::where('status', 'public')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Dokumentasi - Public', 'name' => 'dokumentasi.sekretariat']);
    }

        public function indexPrivate()
    {
        $category = CategoryDokumentasiSekretariat::get();
        $surat = DokumentasiSekretariat::where('status', 'private')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Dokumentasi - Private', 'name' => 'dokumentasi.sekretariat']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryDokumentasiSekretariat::findOrFail($id)->name;
            $category = CategoryDokumentasiSekretariat::get();
            $surat = DokumentasiSekretariat::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Dokumentasi', 'categoryName' => $categoryName, 'name' => 'dokumentasi.sekretariat']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.umpeg.index');
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
                $files->move(public_path() . '/kumpulan_surat/dokumen_sekretariatan', $filename);

                DokumentasiSekretariat::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/dokumen_sekretariatan/' . $filename
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
        $surat = DokumentasiSekretariat::find($id);
        $surat->name = $request->name;
        $surat->description = $request->description;
        $surat->category_id = $request->category;
        $surat->status = $request->status;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['png', 'jpg', 'jpeg', 'gif'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/dokumen_sekretariatan', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/dokumen_sekretariatan/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = DokumentasiSekretariat::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
