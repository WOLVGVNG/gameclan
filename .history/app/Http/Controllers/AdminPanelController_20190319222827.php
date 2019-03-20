<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class AdminPanelController extends Controller
{

    public function index(Request $request)
    {
        session::put('filtr_type', $request->filtr_type ? $request->filtr_type : 'id');
        session::put('filtr_order', $request->filtr_order ? $request->filtr_order : 'id');

        dd(session('filtr_order'));

        $users = User::orderBy(session('filtr_type'), session('filtr_order'))->get();

        return view('admin_panel')->with('users', $users);

        /*
        $filtr_type = $request->filtr_type ? $request->filtr_type : 'id';
        $filtr_order = $request->filtr_order ? $request->filtr_order : 'asc';

        $users = User::orderBy($filtr_type, $filtr_order)->get();

        $data = [
            'users' => $users,
            'filtr_type' => $filtr_type,
            'filtr_order' => $filtr_order
        ];

        return view('admin_panel')->with('data', $data);
        */
    }
}
