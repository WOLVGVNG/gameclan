<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class AdminPanelController extends Controller
{

    public function index(Request $request)
    {

        session::put('sort_type', $request->sort_type ? $request->sort_type : 'id');
        session::put('sort_order', $request->sort_order ? $request->sort_order : 'asc');

        session::put('sort_active', $request->sort_active ?: false);
        session::put('sort_banned', $request->sort_banned ?: false);

        $search = $request->search ? '%'.$request->search.'%' : '%%';


        $users = User::orderBy(session('sort_type'), session('sort_order'))
            ->orWhere('banned', !session('sort_active'))
            ->orWhere('user_name', 'LIKE', $search)
            ->orWhere('email', 'LIKE', $search)
            ->orWhere('steam_id', 'LIKE', $search)
            ->orWhere('facebook_id', 'LIKE', $search)
            ->orWhere('google_id', 'LIKE', $search)
            ->orWhere('geo', 'LIKE', $search)
            ->orWhere('lang', 'LIKE', $search)
            ->orWhere('ref', 'LIKE', $search)
            ->orWhere('ref_code', 'LIKE', $search)
            ->orWhere('deleted_at', 'LIKE', $search)
            ->orWhere('created_at', 'LIKE', $search)
            ->orWhere('updated_at', 'LIKE', $search)
            ->orWhere('points', 'LIKE', $search)
            ->paginate(3);

        session::put('search', str_replace('%', '', $search));

        return view('admin_panel')->with('users', $users);




        /*******************
        ** Rozwiązanie bez użycie sesji - po refreshu strony sort zostanie wyzerowany (ustawiony na id rosnąco)
        ** W tym przypadku w admin_panel.blade.php zamiast session('...') należy użyć $data['...']
        ********************

        $sort_type = $request->sort_type ? $request->sort_type : 'id';
        $sort_order = $request->sort_order ? $request->sort_order : 'asc';

        $users = User::orderBy($sort_type, $sort_order)->get();

        $data = [
            'users' => $users,
            'sort_type' => $sort_type,
            'sort_order' => $sort_order
        ];

        return view('admin_panel')->with('data', $data);
        */
    }
}
