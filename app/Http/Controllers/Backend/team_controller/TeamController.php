<?php

namespace App\Http\Controllers\Backend\team_controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('backend2.pages.team.index', ['title' => 'Team Manage']);
    }
}
