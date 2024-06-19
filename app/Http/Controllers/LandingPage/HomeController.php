<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Admin;
use App\Models\FotoWisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pelum\Dokumentasi\DokumentasiPelum;
use App\Models\Pemerintahan\Dokumentasi\DokumentasiPemerintahan;
use App\Models\Pmks\Dokumentasi\DokumentasiPmks;
use App\Models\Sekretariat\Dokumentasi\DokumentasiSekretariat;
use App\Models\Trantib\Dokumentasi\DokumentasiTrantib;

class HomeController extends Controller
{
    public function index()
    {
        $model1 = DokumentasiSekretariat::where('status', 'public')->get();
        $model2 = DokumentasiTrantib::where('status', 'public')->get();
        $model3 = DokumentasiPemerintahan::where('status', 'public')->get();
        $model4 = DokumentasiPelum::where('status', 'public')->get();
        $model5 = DokumentasiPmks::where('status', 'public')->get();
        return view('home.home-profile', compact('model1', 'model2', 'model3', 'model4', 'model5'));
    }

    public function team()
    {
        $superadmin = Admin::find(1);
        $admins = Admin::where('id' ,'!=', 1)->get();
        return view('home.team', compact('superadmin', 'admins'));
    }

    public function teamdetails($id)
    {
        $admin = Admin::find($id);
        return view('home.team-details', compact('admin'));
    }

    // public function blog()
    // {
    //     $blogs = DokumentasiSekretariat::get();
    //     return view('home.blog', compact('blogs'));
    // }

    public function blogdetails()
    {
        return view('home.blog-details');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function gallery()
    {
        return view('home.gallery');
    }

    public function about()
    {
        return view('home.about');
    }

    public function store(Request $request)
    {
        //
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
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
