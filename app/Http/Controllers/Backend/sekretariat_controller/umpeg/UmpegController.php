<?php

namespace App\Http\Controllers\Backend\sekretariat_controller\umpeg;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sekretariat\Umpeg\CategoryUmpeg;
use App\Models\Sekretariat\Umpeg\SuratUmpeg;
use Illuminate\Support\Facades\File;

class UmpegController extends Controller
{
    public function index()
    {
        $category = CategoryUmpeg::get();
        $surat = SuratUmpeg::get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'UMPEG']);
    }

    public function indexPublic()
    {
        $category = CategoryUmpeg::get();
        $surat = SuratUmpeg::where('status', 'public')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'UMPEG - Public']);
    }

        public function indexPrivate()
    {
        $category = CategoryUmpeg::get();
        $surat = SuratUmpeg::where('status', 'private')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'UMPEG - Private']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryUmpeg::findOrFail($id)->name;
            $category = CategoryUmpeg::get();
            $surat = SuratUmpeg::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'UMPEG', 'categoryName' => $categoryName]);
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
                $files->move(public_path() . '/kumpulan_surat/file_umpeg', $filename);

                SuratUmpeg::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_umpeg/' . $filename
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
        $surat = SuratUmpeg::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_umpeg', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_umpeg/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratUmpeg::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
