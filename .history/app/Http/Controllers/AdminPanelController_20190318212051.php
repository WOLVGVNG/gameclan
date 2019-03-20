<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminPanelController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin_panel')->with('users', $users);
    }
}
