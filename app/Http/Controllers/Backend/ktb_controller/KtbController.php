<?php

namespace App\Http\Controllers\Backend\ktb_controller;

use App\Models\Ktb\SuratKtb;
use Illuminate\Http\Request;
use App\Models\Ktb\CategoryKtb;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class KtbController extends Controller
{
    public function index()
    {
        $category = CategoryKtb::get();
        $suratktb = SuratKtb::get();
        return view('backend2.pages.ktb.index', ['categories' => $category, 'suratktbs' => $suratktb, 'title' => 'Surat KTB']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryKtb::find($id)->name;
            $category = CategoryKtb::get();
            $suratktb = SuratKtb::where('category_id', $id)->get();
            return view('backend2.pages.ktb.index', ['categories' => $category, 'suratktbs' => $suratktb, 'title' => 'Surat KTB', 'categoryName' => $categoryName]);
        } catch (\Throwable $th) {
            return redirect()->route('admin.ktb.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_ktb', $filename);

                SuratKtb::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'path_file' => '/kumpulan_surat/file_ktb/' . $filename
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
        $suratktb = SuratKtb::find($id);
        $suratktb->name = $request->name;
        $suratktb->description = $request->description;
        $suratktb->category_id = $request->category;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_ktb', $filename);

                $filesLama = public_path($suratktb->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $suratktb->path_file = '/kumpulan_surat/file_ktb/' . $filename;
            }
        };

        $suratktb->save();
        return back();
    }


    public function destroy(string $id)
    {
        $suratktb = SuratKtb::find($id);
        $filesLama = public_path($suratktb->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $suratktb->delete();
        return back();
    }
}
