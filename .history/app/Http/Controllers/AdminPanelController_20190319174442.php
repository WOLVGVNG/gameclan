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

        $data = [
            'users' => $users,
            'filtr_type' => $request->filtr_type,
            'order' => $request->filtr_order
        ]
        return view('admin_panel')->with('data', $data);
    }
}
