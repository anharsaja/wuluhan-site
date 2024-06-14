<?php

namespace App\Http\Controllers\Backend\pemerintahan_controller\produk_hukum;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Pemerintahan\ProduHukum\SuratProdukHukum;
use App\Models\Pemerintahan\ProduHukum\CategoryProdukHukum;

class ProdukHukumController extends Controller
{
    public function index()
    {
        $category = CategoryProdukHukum::get();
        $surat = SuratProdukHukum::get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Produk Hukum', 'name' => 'produkhukum']);
    }

    public function indexPublic()
    {
        $category = CategoryProdukHukum::get();
        $surat = SuratProdukHukum::where('status', 'public')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Produk Hukum - Public', 'name' => 'produkhukum']);
    }

        public function indexPrivate()
    {
        $category = CategoryProdukHukum::get();
        $surat = SuratProdukHukum::where('status', 'private')->get();
        return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Produk Hukum - Private', 'name' => 'produkhukum']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryProdukHukum::findOrFail($id)->name;
            $category = CategoryProdukHukum::get();
            $surat = SuratProdukHukum::where('category_id', $id)->get();
            return view('backend2.pages.berkas.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Produk Hukum', 'categoryName' => $categoryName, 'name' => 'produkhukum']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.produkhukum.index');
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
                $files->move(public_path() . '/kumpulan_surat/file_produk_hukum', $filename);

                SuratProdukHukum::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'status' => $request->status,
                    'path_file' => '/kumpulan_surat/file_produk_hukum/' . $filename
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
        $surat = SuratProdukHukum::find($id);
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
                $files->move(public_path() . '/kumpulan_surat/file_produk_hukum', $filename);

                $filesLama = public_path($surat->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $surat->path_file = '/kumpulan_surat/file_produk_hukum/' . $filename;
            }
        };

        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = SuratProdukHukum::find($id);
        $filesLama = public_path($surat->path_file);
        if (File::exists($filesLama)) {
            File::delete($filesLama);
        };
        $surat->delete();
        return back();
    }
}
