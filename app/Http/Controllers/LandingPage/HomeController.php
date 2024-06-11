<?php

namespace App\Http\Controllers\LandingPage;

use App\Models\Admin;
use App\Models\FotoWisata;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home-profile');
    }

    public function team()
    {
        $superadmin = Admin::find(1);
        $admins = Admin::where('id' ,'!=', 1)->get();
        return view('home.team', compact('superadmin', 'admins'));
    }

    public function teamdetails($id)
    {
        return view('home.team-details');
    }

    public function blog()
    {
        return view('home.blog');
    }

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
