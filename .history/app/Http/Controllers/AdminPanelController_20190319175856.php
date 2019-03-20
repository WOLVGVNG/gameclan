<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminPanelController extends Controller
{

    public function index(Request $request)
    {
        //dd($request);
        $users = User::all();

        dd($users);
        $data = [
            'users' => $users,
            'filtr_type' => $request->filtr_type,
            'filtr_order' => $request->filtr_order
        ];

        return view('admin_panel')->with('data', $data);
    }
}
