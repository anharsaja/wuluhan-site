<?php

namespace App\Http\Controllers\Backend\team_controller;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::get();
        return view('backend2.pages.team.index', ['title' => 'Team Manage', 'teams' => $team]);
    }
}
