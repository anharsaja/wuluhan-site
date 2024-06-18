<?php

namespace App\Http\Controllers\Backend\pelum_controller\dokumentasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Pelum\Dokumentasi\DokumentasiPelum;
use App\Models\Pelum\Dokumentasi\CategoryDokumentasiPelum;

class DokumentasiPelumController extends Controller
{
    public function index()
    {
        $category = CategoryDokumentasiPelum::get();
        $surat = DokumentasiPelum::get();
        return view('backend2.pages.dokumentasi.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Dokumentasi Pelum', 'name' => 'pelum.dokumentasi']);
    }

    public function indexPublic()
    {
        $category = CategoryDokumentasiPelum::get();
        $surat = DokumentasiPelum::where('status', 'public')->get();
        return view('backend2.pages.dokumentasi.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Dokumentasi Pelum - Public', 'name' => 'pelum.dokumentasi']);
    }

        public function indexPrivate()
    {
        $category = CategoryDokumentasiPelum::get();
        $surat = DokumentasiPelum::where('status', 'private')->get();
        return view('backend2.pages.dokumentasi.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Dokumentasi Pelum - Private', 'name' => 'pelum.dokumentasi']);
    }

    public function category($id)
    {
        try {
            $categoryName = CategoryDokumentasiPelum::findOrFail($id)->name;
            $category = CategoryDokumentasiPelum::get();
            $surat = DokumentasiPelum::where('category_id', $id)->get();
            return view('backend2.pages.dokumentasi.index', ['categories' => $category, 'surats' => $surat, 'title' => 'Dokumentasi Pelum', 'categoryName' => $categoryName, 'name' => 'pelum.dokumentasi']);
        } catch (\Throwable $th) {
            return redirect()->route('admin.pelum.dokumentasi.index');
        }
    }

    public function blogShow () {
        $blogs = DokumentasiPelum::where('status', 'public')->get();
        $name = 'pelum';
        return view('home.blog', compact('blogs', 'name'));
    }

    public function blogDetails($id)
    {
        try {
            $blogs = DokumentasiPelum::findOrfail($id);
            $name = 'pelum';
            return view('home.blog-details', compact('blogs', 'name'));
        } catch (\Throwable $th) {
            return back();
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
            $files1->move(public_path() . '/kumpulan_surat/file_dokumentasi_pelum', $filename1);
            $filename2 = time() . '_2.' . $extension2;
            $files2->move(public_path() . '/kumpulan_surat/file_dokumentasi_pelum', $filename2);
            $filename3 = time() . '_3.' . $extension3;
            $files3->move(public_path() . '/kumpulan_surat/file_dokumentasi_pelum', $filename3);

            DokumentasiPelum::create([
                'judul' => $request->judul,
                'quotes' => $request->quotes,
                'quotesby' => $request->quotesby,
                'penulis' => $request->penulis,
                'subjudul' => $request->subjudul,
                'tags1' => $request->tags1,
                'tags2' => $request->tags2,
                'description1' => $request->description1,
                'description2' => $request->description2,
                'description3' => $request->description3,
                'category_id' => $request->category_id,
                'foto1' => '/kumpulan_surat/file_dokumentasi_pelum/' . $filename1,
                'subfoto1' => '/kumpulan_surat/file_dokumentasi_pelum/' . $filename2,
                'subfoto2' => '/kumpulan_surat/file_dokumentasi_pelum/' . $filename3,
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
        $surat = DokumentasiPelum::find($id);
        $surat->judul = $request->judul;
        $surat->quotes = $request->quotes;
        $surat->quotesby = $request->quotesby;
        $surat->penulis = $request->penulis;
        $surat->subjudul = $request->subjudul;
        $surat->tags1 = $request->tags1;
        $surat->tags2 = $request->tags2;
        $surat->description1 = $request->description1;
        $surat->description2 = $request->description2;
        $surat->description3 = $request->description3;
        $surat->category_id = $request->category_id;
        $surat->status = $request->status;
        
        if ($request->hasFile('foto1')) {
            $allowedfileExtension = ['jpeg', 'png', 'jpg'];
            $file = $request->file('foto1');
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
    
            if ($check) {
                $filename = time() . '_foto1.' . $extension;
                $file->move(public_path() . '/kumpulan_surat/file_dokumentasi_pelum', $filename);
    
                // Delete old foto1 file
                if (File::exists(public_path($surat->foto1))) {
                    File::delete(public_path($surat->foto1));
                }
    
                $surat->foto1 = '/kumpulan_surat/file_dokumentasi_pelum/' . $filename;
            }
        }
    
        // Handle file upload for subfoto1
        if ($request->hasFile('subfoto1')) {
            // Process and update subfoto1 file
            $allowedfileExtension = ['jpeg', 'png', 'jpg'];
            $file = $request->file('subfoto1');
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
    
            if ($check) {
                $filename = time() . '_subfoto1.' . $extension;
                $file->move(public_path() . '/kumpulan_surat/file_dokumentasi_pelum', $filename);
    
                // Delete old subfoto1 file
                if (File::exists(public_path($surat->subfoto1))) {
                    File::delete(public_path($surat->subfoto1));
                }
    
                $surat->subfoto1 = '/kumpulan_surat/file_dokumentasi_pelum/' . $filename;
            }
        }
    
        // Handle file upload for subfoto2
        if ($request->hasFile('subfoto2')) {
            // Process and update subfoto2 file
            $allowedfileExtension = ['jpeg', 'png', 'jpg'];
            $file = $request->file('subfoto2');
            $extension = $file->getClientOriginalExtension();
            $check = in_array($extension, $allowedfileExtension);
    
            if ($check) {
                $filename = time() . '_subfoto2.' . $extension;
                $file->move(public_path() . '/kumpulan_surat/file_dokumentasi_pelum', $filename);
    
                // Delete old subfoto2 file
                if (File::exists(public_path($surat->subfoto2))) {
                    File::delete(public_path($surat->subfoto2));
                }
    
                $surat->subfoto2 = '/kumpulan_surat/file_dokumentasi_pelum/' . $filename;
            }
        }
    
        // Save the updated record
        $surat->save();
        return back();
    }


    public function destroy(string $id)
    {
        $surat = DokumentasiPelum::find($id);
        if (File::exists(public_path($surat->foto1))) {
            File::delete(public_path($surat->foto1));
        }
        if (File::exists(public_path($surat->subfoto1))) {
            File::delete(public_path($surat->subfoto1));
        } 
        if (File::exists(public_path($surat->subfoto2))) {
            File::delete(public_path($surat->subfoto2));
        };
        $surat->delete();
        return back();
    }
}
