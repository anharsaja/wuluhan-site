<?php

namespace App\Http\Controllers\LandingPage;

use App\Http\Controllers\Controller;
use App\Models\FotoWisata;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.home-profile');
    }

    public function team()
    {
        return view('home.team');
    }

    public function teamdetails()
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
