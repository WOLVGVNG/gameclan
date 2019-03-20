<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class AdminPanelController extends Controller
{

    public function index(Request $request)
    {
        //session('type', $request->filtre_type);
        $users = User::orderBy($request->filtr_type, $request->filtr_order)->get();
//dd(session('type'));
        $data = [
            'users' => $users,
            'filtr_type' => $request->filtr_type,
            'filtr_order' => $request->filtr_order
        ];

        return view('admin_panel')->with('data', $data);
    }
}
