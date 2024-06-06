<?php

namespace App\Http\Controllers\Backend\sekretariat_controller\plk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sekretariat\Plk\CategoryPlk;
use App\Models\Sekretariat\Plk\SuratPlk;
use Illuminate\Support\Facades\File;

class PlkController extends Controller
{
    public function index()
    {
        $category = CategoryPlk::get();
        $surat = SuratPlk::get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Perencanaan Keuangan', 'name' => 'plk']);
    }

    public function indexPublic()
    {
        $category = CategoryPlk::get();
        $surat = SuratPlk::where('status', 'public')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Perencanaan Keuangan - Public', 'name' => 'plk']);
    }

        public function indexPrivate()
    {
        $category = CategoryPlk::get();
        $surat = SuratPlk::where('status', 'private')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Perencanaan Keuangan - Private', 'name' => 'plk']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryPlk::findOrFail($id)->name;
            $category = CategoryPlk::get();
            $surat = SuratPlk::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Perencanaan Keuangan', 'categoryName' => $categoryName, 'name' => 'plk']);
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
                $files->move(public_path() . '/kumpulan_surat/file_perencanaan_keuangan', $filename);

                SuratPlk::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_perencanaan_keuangan/' . $filename
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
        $surat = SuratPlk::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_perencanaan_keuangan', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_perencanaan_keuangan/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratPlk::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
