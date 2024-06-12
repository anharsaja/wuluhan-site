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
        $blog = DokumentasiSekretariat::get();
        return view('backend2.pages.dokumentasi.index', ['categories' => $category, 'blogs' => $blog, 'title' => 'Dokumentasi', 'name' => 'sekretariat.dokumentasi']);
    }

    public function indexPublic()
    {
        $category = CategoryDokumentasiSekretariat::get();
        $blog = DokumentasiSekretariat::where('status', 'public')->get();
        return view('backend2.pages.dokumentasi.index', ['categories' => $category, 'blogs' => $blog, 'title' => 'Dokumentasi - Public', 'name' => 'sekretariat.dokumentasi']);
    }

        public function indexPrivate()
    {
        $category = CategoryDokumentasiSekretariat::get();
        $blog = DokumentasiSekretariat::where('status', 'private')->get();
        return view('backend2.pages.dokumentasi.index', ['categories' => $category, 'blogs' => $blog, 'title' => 'Dokumentasi - Private', 'name' => 'sekretariat.dokumentasi']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryDokumentasiSekretariat::findOrFail($id)->name;
            $category = CategoryDokumentasiSekretariat::get();
            $blog = DokumentasiSekretariat::where('category_id', $id)->get();
            return view('backend2.pages.sekretariat.index', ['categories' => $category, 'blogs' => $blog, 'title' => 'Dokumentasi', 'categoryName' => $categoryName, 'name' => 'sekretariat.dokumentasi']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.sekretariat.dokumentasi.index');
        }
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $allowedfileExtension = ['jpeg', 'jpg', 'png'];
        $files1 = $request->file('file1');
        $files2 = $request->file('file2');
        $files3 = $request->file('file3');
        $extension1 = $files1->getClientOriginalExtension();
        $extension2 = $files2->getClientOriginalExtension();
        $extension3 = $files3->getClientOriginalExtension();
        $check1 = in_array($extension1, $allowedfileExtension);
        $check2 = in_array($extension2, $allowedfileExtension);
        $check3 = in_array($extension3, $allowedfileExtension);

        if ($check1 || $check2 || $check3) {
            $filename1 = time() . '_1.' . $extension1;
            $files1->move(public_path() . '/kumpulan_surat/file_dokumentasi_sekretariat', $filename1);
            $filename2 = time() . '_2.' . $extension2;
            $files2->move(public_path() . '/kumpulan_surat/file_dokumentasi_sekretariat', $filename2);
            $filename3 = time() . '_3.' . $extension3;
            $files3->move(public_path() . '/kumpulan_surat/file_dokumentasi_sekretariat', $filename3);

            DokumentasiSekretariat::create([
                'judul' => $request->judul,
                'quotes' => $request->quotes,
                'quotesby' => $request->quotesby,
                'penulis' => $request->penulis,
                'subjudul' => $request->subjudul,
                'tag1' => $request->tag1,
                'tag2' => $request->tag2,
                'description1' => $request->description1,
                'description2' => $request->description2,
                'description3' => $request->description3,
                'category_id' => $request->category_id,
                'status' => $request->status,
                'foto1' => '/kumpulan_surat/file_dokumentasi_sekretariat/' . $filename1,
                'subfoto1' => '/kumpulan_surat/file_dokumentasi_sekretariat/' . $filename2,
                'subfoto2' => '/kumpulan_surat/file_dokumentasi_sekretariat/' . $filename3,
                'status' => $request->status
            ]);
            return back();
        } else {
            return back();
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
        $blog = DokumentasiSekretariat::find($id);
        $blog->name = $request->name;
        $blog->description = $request->description;
        $blog->category_id = $request->category;
        $blog->status = $request->status;

        if ($request->hasFile('file')) {
            $allowedfileExtension = ['pdf', 'docx', 'doc', 'xlsx', 'xls', 'jpg'];
            $files = $request->file('file');
            $filename = $files->getClientOriginalName();
            $extension = $files->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);

            if ($check) {
                $filename = time() . '.' . $extension;
                $files->move(public_path() . '/kumpulan_surat/file_dokumentasi_sekretariat', $filename);

                $filesLama = public_path($blog->path_file);
                if (File::exists($filesLama)) {
                    File::delete($filesLama);
                };

                $blog->path_file = '/kumpulan_surat/file_dokumentasi_sekretariat/' . $filename;
            }
        };

        $blog->save();
        return back();
    }


    public function destroy(string $id)
    {
        $blog = DokumentasiSekretariat::find($id);
        $filesLama1 = public_path($blog->foto1);
        $filesLama2 = public_path($blog->subfoto1);
        $filesLama3 = public_path($blog->subfoto2);
        if (File::exists($filesLama1)) {
            File::delete($filesLama1);
        }
        else if (File::exists($filesLama2)) {
            File::delete($filesLama2);
        } 
        else if (File::exists($filesLama3)) {
            File::delete($filesLama3);
        };
        $blog->delete();
        return back();
    }
}
