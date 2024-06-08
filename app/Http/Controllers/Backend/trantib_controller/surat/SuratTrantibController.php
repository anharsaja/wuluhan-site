<?php

namespace App\Http\Controllers\Backend\trantib_controller\surat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Trantib\Surat\SuratTrantib;
use App\Models\Trantib\Surat\CategorySuratTrantib;

class SuratTrantibController extends Controller
{
    public function index()
    {
        $category = CategorySuratTrantib::get();
        $surat = SuratTrantib::get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'DOKUMEN TANTRIB', 'name' => 'trantib.surat']);
    }

    public function indexPublic()
    {
        $category = CategorySuratTrantib::get();
        $surat = SuratTrantib::where('status', 'public')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'DOKUMEN TANTRIB - Public', 'name' => 'trantib.surat']);
    }

        public function indexPrivate()
    {
        $category = CategorySuratTrantib::get();
        $surat = SuratTrantib::where('status', 'private')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'DOKUMEN TANTRIB - Private', 'name' => 'trantib.surat']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategorySuratTrantib::findOrFail($id)->name;
            $category = CategorySuratTrantib::get();
            $surat = SuratTrantib::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'DOKUMEN TANTRIB', 'categoryName' => $categoryName, 'name' => 'trantib.surat']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.trantib.surat.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_surat_tantrib', $filename);

                SuratTrantib::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_surat_tantrib/' . $filename
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
        $surat = SuratTrantib::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_surat_tantrib', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_surat_tantrib/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratTrantib::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
