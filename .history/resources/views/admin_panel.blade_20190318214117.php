@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @foreach($users as $user)
    <table class='table'>
        <tr>
            <th>id</th>
            <th>active</th>
            <th>banned</th>
            <th>notifiable_email</th>
            <th>user_name</th>
            <th>email</th>
            <th>email_verified_at</th>
            <th>password</th>
            <th>remember_token</th>
            <th>avatar</th>
            <th>points</th>
            <th>steam_id</th>
            <th>facebook_id</th>
            <th>google_id</th>
            <th>geo</th>
            <th>lang</th>
            <th>ref</th>
            <th>ref_status</th>
            <th>ref_code</th>
            <th>delted_at</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        <tr>
            <td>{{$user->id}}<td>
            <td>{{$user->active}}<td>
            <td>{{$user->banned}}<td>
            <td>{{$user->notifiable_email}}<td>
            <td>{{$user->user_name}}<td>
            <td>{{$user->email}}<td>
            <td>{{$user->email_verified_at}}<td>
            <td>{{$user->password}}<td>
            <td>{{$user->remember_token}}<td>
            <td>{{$user->avatar}}<td>
            <td>{{$user->points}}<td>
            <td>{{$user->steam_id}}<td>
            <td>{{$user->facebook_id}}<td>
            <td>{{$user->google_id}}<td>
            <td>{{$user->geo}}<td>
            <td>{{$user->lang}}<td>
            <td>{{$user->ref}}<td>
            <td>{{$user->ref_status}}<td>
            <td>{{$user->ref_code}}<td>
            <td>{{$user->delted_at}}<td>
            <td>{{$user->created_at}}<td>
            <td>{{$user->updated_at}}<td>
        </tr>
    </table>
    @endforeach
</div>
@endsection