@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @foreach($users as $user)
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>id</p>
            <p>{{$user->id}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>active</p>
            <p>{{$user->active}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>banned</p>
            <p>{{$user->banned}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>user_name</p>
            <p>{{$user->user_name}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>email</p>
            <p>{{$user->email}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>email_verified_at</p>
            <p>{{$user->email_verified_at}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>password</p>
            <p>{{$user->password}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>remember_token</p>
            <p>{{$user->remember_token}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>avatar</p>
            <p>{{$user->avatar}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>points</p>
            <p>{{$user->points}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>steam_id</p>
            <p>{{$user->steam_id}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>facebook_id</p>
            <p>{{$user->facebook_id}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>google_id</p>
            <p>{{$user->google_id}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>geo</p>
            <p>{{$user->geo}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>lang</p>
            <p>{{$user->lang}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>ref</p>
            <p>{{$user->ref}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>ref_status</p>
            <p>{{$user->ref_status}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>ref_code</p>
            <p>{{$user->ref_code}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>deleted_at</p>
            <p>{{$user->deleted_at}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>created_at</p>
            <p>{{$user->created_at}}</p>
        </div>
        <div class='col-md-4 col-lg-3'>
            <p class='font-weight-bold'>updated_at</p>
            <p>{{$user->updated_at}}</p>
        </div>
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