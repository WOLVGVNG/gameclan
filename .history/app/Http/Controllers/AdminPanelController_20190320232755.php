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

        session::put('filter_points_switch', $request->filter_points_switch ?: false);
        if ($request->filter_points!=null) {
            session::put('filter_points', intval($request->filter_points));
        }

        session::put('filter_connected_accounts_switch', $request->filter_connected_accounts_switch ?: false);
        session::put('filter_connected_accounts_steam', $request->filter_connected_accounts_steam ? 'steam' : null);
        session::put('filter_connected_accounts_facebook', $request->filter_connected_accounts_facebook ? 'facebook' : null);
        session::put('filter_connected_accounts_google', $request->filter_connected_accounts_google ? 'google' : null);

        session::put('filter_geo_switch', $request->filter_geo_switch ?: false);
        session::put('filter_geo_poland', $request->filter_geo_poland ? 'poland' : null);
        session::put('filter_geo_england', $request->filter_geo_england ? 'england' : null);
        session::put('filter_geo_netherland', $request->filter_geo_netherland ? 'netherland' : null);
        session::put('filter_geo_germany', $request->filter_geo_germany ? 'germany' : null);

        session::put('filter_lang_switch', $request->filter_lang_switch ?: false);
        session::put('filter_lang_poland', $request->filter_lang_poland ? 'pl' : null);
        session::put('filter_lang_england', $request->filter_lang_england ? 'en' : null);
        session::put('filter_lang_netherland', $request->filter_lang_netherland ? 'nl' : null);
        session::put('filter_lang_germany', $request->filter_lang_germany ? 'ge' : null);




        $search = $request->search ? '%'.$request->search.'%' : '%%';



    // dd($request->filter_connected_accounts_steam);


        $users = User::orderBy(session('sort_type'), session('sort_order'))
            ->when(session('filter_active_switch') == true, function($q) {
                $q->when( session('filter_active') == 'active', function($w) {
                    $w->where('active', 'LIKE', session('filter_active') == 'active' ? true : false);
                });
                $q->when( session('filter_active') == 'banned', function($w) {
                    $w->where('banned', 'LIKE', session('filter_active') == 'banned' ? true : false);
                });
            })
            ->when(session('filter_notifiable_email_switch') == true && session('filter_notifiable_email'), function($q) {
                $q->where('notifiable_email', 'LIKE', (session('filter_notifiable_email') == 'true' ? true : false));
            })
            ->when(session('filter_verified_email_switch') == true && session('filter_verified_email'), function($q) {
                $q->where('email_verified_at', session('filter_verified_email') == 'true' ? '!=' : '=', null);
            })
            ->when(session('filter_points_switch') == true, function($q) {
                $q->where('points', '>=', session('filter_points'));
            })
            ->when(session('filter_connected_accounts_switch') == true, function($q) {
                $q->when(session('filter_connected_accounts_steam') == 'steam', function($w) {
                    $w->where('steam_id', '!=', null);
                });
                $q->when(session('filter_connected_accounts_facebook') == 'facebook', function($w) {
                    $w->where('facebook_id', '!=', null);
                });
                $q->when(session('filter_connected_accounts_google') == 'google', function($w) {
                    $w->where('google_id', '!=', null);
                });
            })
            ->when(session('filter_geo_switch') == true, function($q) {
                $q->when(session('filter_geo_poland') == 'poland', function($w) {
                    $w->where('geo', '=', 'poland');
                });
                $q->when(session('filter_geo_england') == 'england', function($w) {
                    $w->where('geo', '=', 'england');
                });
                $q->when(session('filter_geo_germany') == 'germany', function($w) {
                    $w->where('geo', '=', 'germany');
                });
                $q->when(session('filter_geo_netherland') == 'netherland', function($w) {
                    $w->where('geo', '=', 'netherland');
                });
            })
            ->when(session('filter_lang_switch') == true, function($q) {
                $q->when(session('filter_lang_pl') == 'pl', function($w) {
                    $w->where('lang', '=', 'pl');
                });
                $q->when(session('filter_lang_en') == 'en', function($w) {
                    $w->where('lang', '=', 'en');
                });
                $q->when(session('filter_lang_ge') == 'ge', function($w) {
                    $w->where('lang', '=', 'ge');
                });
                $q->when(session('filter_lang_nl') == 'nl', function($w) {
                    $w->where('lang', '=', 'nl');
                });
            })
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



//->where('email_verified_at', session('filter_verified_email_switch')==true && session('filter_verified_email') ? (session('filter_verified_email')=='true' ? '!=' : '=') : '*', null)



        //session::put('filter_emails_switch', $request->filter_emails_switch ?: false);
        //session::put('emails', $request->filter_emails);
        //dd(session('emails'));