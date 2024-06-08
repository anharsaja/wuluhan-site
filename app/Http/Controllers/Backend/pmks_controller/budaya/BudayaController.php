<?php

namespace App\Http\Controllers\Backend\pmks_controller\budaya;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Pmks\Budaya\SuratBudaya;
use App\Models\Pmks\Budaya\CategoryBudaya;

class BudayaController extends Controller
{
    public function index()
    {
        $category = CategoryBudaya::get();
        $surat = SuratBudaya::get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'BUDAYA', 'name' => 'budaya']);
    }

    public function indexPublic()
    {
        $category = CategoryBudaya::get();
        $surat = SuratBudaya::where('status', 'public')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'BUDAYA - Public', 'name' => 'budaya']);
    }

        public function indexPrivate()
    {
        $category = CategoryBudaya::get();
        $surat = SuratBudaya::where('status', 'private')->get();
        return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'BUDAYA - Private', 'name' => 'budaya']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryBudaya::findOrFail($id)->name;
            $category = CategoryBudaya::get();
            $surat = SuratBudaya::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'surats' => $surat, 'title' => 'BUDAYA', 'categoryName' => $categoryName, 'name' => 'budaya']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.budaya.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_budaya', $filename);

                SuratBudaya::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_budaya/' . $filename
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
        $surat = SuratBudaya::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_budaya', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_budaya/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratBudaya::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
