<?php

namespace App\Http\Controllers\Backend\pmks_controller\agama;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Pmks\Agama\SuratAgama;
use App\Models\Pmks\Agama\CategoryAgama;

class AgamaController extends Controller
{
    public function index()
    {
        $category = CategoryAgama::get();
        $surat = SuratAgama::get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'AGAMA', 'name' => 'agama']);
    }

    public function indexPublic()
    {
        $category = CategoryAgama::get();
        $surat = SuratAgama::where('status', 'public')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'AGAMA - Public', 'name' => 'agama']);
    }

        public function indexPrivate()
    {
        $category = CategoryAgama::get();
        $surat = SuratAgama::where('status', 'private')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'AGAMA - Private', 'name' => 'agama']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryAgama::findOrFail($id)->name;
            $category = CategoryAgama::get();
            $surat = SuratAgama::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'AGAMA', 'categoryName' => $categoryName, 'name' => 'agama']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.agama.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_agama', $filename);

                SuratAgama::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_agama/' . $filename
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
        $surat = SuratAgama::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_agama', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_agama/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratAgama::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
