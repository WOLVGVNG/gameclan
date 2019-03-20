@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    @foreach($users as $user)
        <div class='row'>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>id</p>
                <p>{{$user->id}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>active</p>
                <p>{{$user->active}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>banned</p>
                <p>{{$user->banned}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>user_name</p>
                <p>{{$user->user_name}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>email</p>
                <p>{{$user->email}}</p>
            </div>
            @if(isset($user->email_verified_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>email_verified_at</p>
                    <p>{{$user->email_verified_at}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>password</p>
                <p>{{$user->password}}</p>
            </div>
            @if(isset($user->email_verified_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>remember_token</p>
                    <p>{{$user->remember_token}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>avatar</p>
                <p>{{$user->avatar}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>points</p>
                <p>{{$user->points}}</p>
            </div>
            @if(isset($user->steam_id))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>steam_id</p>
                    <p>{{$user->steam_id}}</p>
                </div>
            @endif
            @if(isset($user->facebook_id))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>facebook_id</p>
                    <p>{{$user->facebook_id}}</p>
                </div>
            @endif
            @if(isset($user->google_id))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>google_id</p>
                    <p>{{$user->google_id}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>geo</p>
                <p>{{$user->geo}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>lang</p>
                <p>{{$user->lang}}</p>
            </div>
            @if(isset($user->ref))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>ref</p>
                    <p>{{$user->ref}}</p>
                </div>
            @endif
            @if(isset($user->ref_status))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>ref_status</p>
                    <p>{{$user->ref_status}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>ref_code</p>
                <p>{{$user->ref_code}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>deleted_at</p>
                <p>{{$user->deleted_at}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>created_at</p>
                <p>{{$user->created_at}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>updated_at</p>
                <p>{{$user->updated_at}}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection