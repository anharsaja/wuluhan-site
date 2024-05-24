<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CategoryUmkm;
use App\Models\SuratUmkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index()
    {
        $category = CategoryUmkm::get();
        $suratumkm = SuratUmkm::get();
        return view('backend2.pages.umkm.index', ['categories' => $category, 'suratumkms' => $suratumkm]);
    }

    public function category($id)
    {
        $category = CategoryUmkm::get();
        $suratumkm = SuratUmkm::where('category_id',$id)->get();
        return view('backend2.pages.umkm.index', ['categories' => $category, 'suratumkms' => $suratumkm]);
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
                $filename = time().'.'.$extension;
                $files->move(public_path() . '/kumpulan_surat/file_umkm' , $filename);

                SuratUmkm::create([
                    'name' => $request->name,
                    'description' => $request->description,
                    'category_id' => $request->category_id,
                    'path_file' => '/kumpulan_surat/file_umkm/'. $filename
                ]);
                return back();

            } else {
                return back();
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
