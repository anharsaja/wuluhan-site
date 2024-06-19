<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Pmks\Pkk\SuratPkk;
use Spatie\Permission\Models\Role;
use App\Models\Pmks\Osjj\SuratOsjj;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\Pmks\Agama\SuratAgama;
use App\Models\Pmks\Budaya\SuratBudaya;
use App\Models\Pmks\Wisata\SuratWisata;
use App\Models\Sekretariat\Plk\SuratPlk;
use Spatie\Permission\Models\Permission;
use App\Models\Pmks\Kencana\SuratKencana;
use App\Models\Pemerintahan\Desa\SuratDesa;
use App\Models\Pelum\Adminduk\SuratAdminduk;
use App\Models\Sekretariat\Umpeg\SuratUmpeg;
use App\Models\Pmks\Dokumentasi\DokumentasiPmks;
use App\Models\Pemerintahan\Rapbdes\SuratRapbdes;
use App\Models\Pelum\Dokumentasi\DokumentasiPelum;
use App\Models\Pemerintahan\ProduHukum\SuratProdukHukum;
use App\Models\Sekretariat\Dokumentasi\DokumentasiSekretariat;
use App\Models\Pemerintahan\Dokumentasi\DokumentasiPemerintahan;

class DashboardController extends Controller
{
    public $user;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }


    public function index()
    {
        $total_roles = count(Role::select('id')->get());
        $total_admins = count(Admin::select('id')->get());
        $total_permissions = count(Permission::select('id')->get());
        $total_dokumen_sekretariat = count(DokumentasiSekretariat::select('id')->get());
        $total_surat_plk = count(SuratPlk::select('id')->get());
        $total_surat_umpeg = count(SuratUmpeg::select('id')->get());

        $total_surat_adminduk = count(SuratAdminduk::select('id')->get());
        $total_dokumen_pelum = count(DokumentasiPelum::select('id')->get());

        $total_dokumen_pemerintahan = count(DokumentasiPemerintahan::select('id')->get());
        $total_surat_desa = count(SuratDesa::select('id')->get());
        $total_surat_produkhukum = count(SuratProdukHukum::select('id')->get());
        $total_surat_rapbdes = count(SuratRapbdes::select('id')->get());

        $total_dokumen_pmks = count(DokumentasiPmks::select('id')->get());
        $total_surat_agama = count(SuratAgama::select('id')->get());
        $total_surat_budaya = count(SuratBudaya::select('id')->get());
        $total_surat_kencana = count(SuratKencana::select('id')->get());
        $total_surat_osjj = count(SuratOsjj::select('id')->get());
        $total_surat_pkk = count(SuratPkk::select('id')->get());
        $total_surat_wisata = count(SuratWisata::select('id')->get());

        $title = 'Dashboard';
        return view('backend2.pages.dashboard.index', compact('total_dokumen_pmks', 'total_surat_agama', 'total_surat_budaya', 'total_surat_kencana', 'total_surat_osjj', 'total_surat_pkk', 'total_surat_wisata','total_dokumen_pemerintahan', 'total_surat_desa', 'total_surat_produkhukum', 'total_surat_rapbdes','total_surat_adminduk', 'total_dokumen_pelum','total_surat_plk','total_surat_umpeg','total_dokumen_sekretariat','total_admins', 'total_roles', 'total_permissions', 'title'));
    }

    public function profile()
    {
        $title = 'Profile';
        return view('backend2.pages.profile.index', compact('title'));
    }

    public function storeProfile(Request $request,  $id)
    {

        $admin = Admin::find($id);

        // Validation Data
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|max:100|email|unique:admins,email,' . $id,
        ]);
        if ($request->password) {
            $admin->password = Hash::make($request->password);
            }
            
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->description = $request->description;
        $admin->nip = $request->nip;
        $admin->save();

        return back();
    }

    public function uploadProfile(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $fileName = $file->getClientOriginalName(); // Ambil nama file asli
            $filePath = '/img/avatar/' . $fileName; // Path lengkap file

            // Pindahkan file ke direktori 'public/img/avatar'
            $file->move(public_path('img/avatar'), $fileName);

            $admin = Admin::find(auth()->id()); // Mendapatkan objek admin yang sedang login
            if ($admin->foto) {
                $oldFilePath = public_path($admin->foto);
                if (File::exists($oldFilePath)) {
                    File::delete($oldFilePath); // Hapus gambar lama
                }
            }

            // Simpan path lengkap ke database Admin
            $admin = Admin::find(auth()->id()); // Mendapatkan objek admin yang sedang login
            $admin->foto = $filePath; // Simpan path lengkap ke dalam kolom 'foto' di database
            $admin->save();

            return response()->json(['success' => true, 'path' => $filePath]);
        }
        return response()->json(['success' => false]);
    }
}
