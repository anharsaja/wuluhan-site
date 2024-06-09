<?php

namespace App\Http\Controllers\Backend;

use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

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
        $title = 'Dashboard';
        return view('backend2.pages.dashboard.index', compact('total_admins', 'total_roles', 'total_permissions', 'title'));
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
