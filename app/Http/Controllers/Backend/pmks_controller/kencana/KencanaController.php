<?php

namespace App\Http\Controllers\Backend\pmks_controller\kencana;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Pmks\Kencana\SuratKencana;
use App\Models\Pmks\Kencana\CategoryKencana;

class KencanaController extends Controller
{
    public function index()
    {
        $category = CategoryKencana::get();
        $surat = SuratKencana::get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'KENCANA', 'name' => 'kencana']);
    }

    public function indexPublic()
    {
        $category = CategoryKencana::get();
        $surat = SuratKencana::where('status', 'public')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'KENCANA - Public', 'name' => 'kencana']);
    }

        public function indexPrivate()
    {
        $category = CategoryKencana::get();
        $surat = SuratKencana::where('status', 'private')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'KENCANA - Private', 'name' => 'kencana']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryKencana::findOrFail($id)->name;
            $category = CategoryKencana::get();
            $surat = SuratKencana::where('category_id', $id)->get();
            return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'KENCANA', 'categoryName' => $categoryName, 'name' => 'kencana']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.kencana.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_kencana', $filename);

                SuratKencana::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_kencana/' . $filename
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
        $surat = SuratKencana::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_kencana', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_kencana/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratKencana::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
