<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
// use App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    //     public function index()
    // {
    //     // Retrieve the authenticated team
    //     $team = Auth::user();

    //     // Retrieve users associated with the team's group_name
    //     $users = User::where('group_name', $team->group_name)->get();

    //     return view('navbarlogin.dashboard', ['team' => $team, 'users' => $users]);
    // }
    public function index($group_name)
    {
        $users = User::sameGroup($group_name)->get();

        return view('navbarlogin.dashboard', ['users' => $users]);
    }
}
    