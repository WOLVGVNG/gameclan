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

        session::put('filter_active_switch', $request->filter_active_switch ?: false);
        if ($request->filter_active!=null) {
            session::put('filter_active', $request->filter_active);
        }

        session::put('filter_notifiable_email_switch', $request->filter_notifiable_email_switch ?: false);
        if ($request->filter_notifiable_email!=null) {
            session::put('filter_notifiable_email', $request->filter_notifiable_email);
        }

        session::put('filter_verified_email_switch', $request->filter_verified_email_switch ?: false);
        if ($request->filter_verified_email!=null) {
            session::put('filter_verified_email', $request->filter_verified_email);
        }


        //dd(session('filter_verified_email'));

        $search = $request->search ? '%'.$request->search.'%' : '%%';


        $users = User::orderBy(session('sort_type'), session('sort_order'))
            ->where('active', 'LIKE', session('filter_active_switch')==true && session('filter_active')=='active' ? true : '%%')
            ->where('banned', 'LIKE', session('filter_active_switch')==true && session('filter_active')=='banned' ? true : '%%')
            ->where('notifiable_email', 'LIKE', session('filter_notifiable_email_switch')==true && session('filter_notifiable_email') ? (session('filter_notifiable_email')=='true' ? true : false) : '%%')
            ->where('email_verified_at', session('filter_verified_email_switch')==true && session('filter_verified_email') ? (session('filter_verified_email')=='true' ? '!=' : '=') : '%%', null)
            ->where(function($q) use ($search){
                $q->where('user_name', 'LIKE', $search)
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
                ->orWhere('points', 'LIKE', $search);
            })
            ->paginate(3);

        session::put('search', str_replace('%', '', $search));

        return view('admin_panel')->with('users', $users);
    }
}



        //->where('email_verified_at', 'LIKE', session('filter_verified_email_switch')==true && session('filter_verified_email') ? (session('filter_verified_email')=='true' ? '%%' : null) : '%%')



        //session::put('filter_emails_switch', $request->filter_emails_switch ?: false);
        //session::put('emails', $request->filter_emails);
        //dd(session('emails'));