@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    <form action='/' method='GET'>
        <div class='row'>
            <div class='col'>
                <p>Filtr by column type</p>
                <select name='filtr_type'>
                    <option>id</option>
                    <option>user_name</option>
                    <option>email</option>
                    <option>active</option>
                    <option>banned</option>
                    <option>notifiable_email</option>
                    <option>email_verified_at</option>
                    <option>remember_token</option>
                    <option>avatar</option>
                    <option>points</option>
                    <option>steam_id</option>
                    <option>facebook_id</option>
                    <option>google_id</option>
                    <option>geo</option>
                    <option>lang</option>
                    <option>ref</option>
                    <option>ref_status</option>
                    <option>ref_code</option>
                    <option>deleted_at</option>
                    <option>created_at</option>
                    <option>updated_at</option>
                </select>
            </div>
            <div class='col'>
                <p>Filtr by order</p>
                <label for='asc'>Ascending</label>
                <input type='radio' name='filtr_order' value='asc' id='asc' checked>
                <label for='desc'>Descending</label>
                <input type='radio' name='filtr_order' value='desc' id='desc'>
            </div>
        </div>
        <div class='row mt-2 mb-5'>
            <div class='col-12'>
                <button type='submit' class='btn btn-block btn-primary'>Fitr</button>
            </div>
        </div>
    </form>
    @foreach($users as $user)
        <div class='row'>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>id</p>
                <p>{{$user->id}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>user_name</p>
                <p>{{$user->user_name}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>email</p>
                <p>{{$user->email}}</p>
            </div>
            @if($user->active === 1)
                <div class='user-part-div col d-flex align-items-center'>
                    <p class='font-weight-bold'>active</p>
                </div>
            @endif
            @if($user->banned === 1)
            <div class='user-part-div col d-flex align-items-center'>
                <p class='font-weight-bold'>banned</p>
            </div>
            @endif
            @if(isset($user->email_verified_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>email_verified_at</p>
                    <p>{{$user->email_verified_at}}</p>
                </div>
            @endif
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
            @if(isset($user->deleted_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>deleted_at</p>
                    <p>{{$user->deleted_at}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>created_at</p>
                <p>{{$user->created_at}}</p>
            </div>
            @if(isset($user->updated_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>updated_at</p>
                    <p>{{$user->updated_at}}</p>
                </div>
            @endif
        </div>
    @endforeach
</div>
@endsection