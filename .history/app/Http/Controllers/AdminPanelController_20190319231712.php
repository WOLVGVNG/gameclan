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
        session::put('search', $request->search ? $request->search : '');

        $users = User::orderBy(session('sort_type'), session('sort_order'))
            ->where('user_name', 'LIKE', '%%')

            ->paginate(5);

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
