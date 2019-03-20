@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @foreach($users as $user)
        <div class='col-lg-3'>
            <p>id</p>
            <p>{{$user->id}}</p>
            active
            banned
            notifiable_email
            user_name
            email
            email_verified_at
            password
            remember_token
            avatar
            points
            steam_id
            facebook_id
            google_id
            geo
            lang
            ref
            ref_status
            ref_code
            delted_at
            created_at
            updated_at



            {{$user->active}}
            {{$user->banned}}
            {{$user->notifiable_email}}
            {{$user->user_name}}
            {{$user->email}}
            {{$user->email_verified_at}}
            {{$user->password}}
            {{$user->remember_token}}
            {{$user->avatar}}
            {{$user->points}}
            {{$user->steam_id}}
            {{$user->facebook_id}}
            {{$user->google_id}}
            {{$user->geo}}
            {{$user->lang}}
            {{$user->ref}}
            {{$user->ref_status}}
            {{$user->ref_code}}
            {{$user->delted_at}}
            {{$user->created_at}}
            {{$user->updated_at}}

        </div>
    @endforeach
</div>
@endsection