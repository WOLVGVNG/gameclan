<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class AdminPanelController extends Controller
{

    public function index(Request $request)
    {
        $filtr_type = $request->filtr_type ? $request->filtr_type : 'id';
        $filtr_order = $request->filtr_order ? $request->filtr_order : 'asc';

        session::put('type', $filtr_type);

        $users = User::orderBy($filtr_type, $filtr_order)->get();
        dd(session('type'));

        $data = [
            'users' => $users,
            'filtr_type' => $filtr_type,
            'filtr_order' => $filtr_order
        ];

        return view('admin_panel')->with('data', $data);
    }
}
