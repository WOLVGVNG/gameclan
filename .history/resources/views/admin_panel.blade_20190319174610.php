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
                <button type='submit' class='btn btn-block btn-primary'>Apply fitr</button>
            </div>
        </div>
    </form>
    @foreach($users as $user)
        <div class='row'>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>id</p>
                <p>{{$data['user']->id}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>user_name</p>
                <p>{{$data['user']->user_name}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>email</p>
                <p>{{$data['user']->email}}</p>
            </div>
            @if($data['user']->active === 1)
                <div class='user-part-div col d-flex align-items-center'>
                    <p class='font-weight-bold'>active</p>
                </div>
            @endif
            @if($data['user']->banned === 1)
            <div class='user-part-div col d-flex align-items-center'>
                <p class='font-weight-bold'>banned</p>
            </div>
            @endif
            @if(isset($data['user']->email_verified_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>email_verified_at</p>
                    <p>{{$data['user']->email_verified_at}}</p>
                </div>
            @endif
            @if(isset($data['user']->email_verified_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>remember_token</p>
                    <p>{{$data['user']->remember_token}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>avatar</p>
                <p>{{$data['user']->avatar}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>points</p>
                <p>{{$data['user']->points}}</p>
            </div>
            @if(isset($data['user']->steam_id))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>steam_id</p>
                    <p>{{$data['user']->steam_id}}</p>
                </div>
            @endif
            @if(isset($data['user']->facebook_id))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>facebook_id</p>
                    <p>{{$data['user']->facebook_id}}</p>
                </div>
            @endif
            @if(isset($data['user']->google_id))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>google_id</p>
                    <p>{{$data['user']->google_id}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>geo</p>
                <p>{{$data['user']->geo}}</p>
            </div>
            <div class='user-part-div col'>
                <p class='font-weight-bold'>lang</p>
                <p>{{$data['user']->lang}}</p>
            </div>
            @if(isset($data['user']->ref))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>ref</p>
                    <p>{{$data['user']->ref}}</p>
                </div>
            @endif
            @if(isset($data['user']->ref_status))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>ref_status</p>
                    <p>{{$data['user']->ref_status}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>ref_code</p>
                <p>{{$data['user']->ref_code}}</p>
            </div>
            @if(isset($data['user']->deleted_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>deleted_at</p>
                    <p>{{$data['user']->deleted_at}}</p>
                </div>
            @endif
            <div class='user-part-div col'>
                <p class='font-weight-bold'>created_at</p>
                <p>{{$data['user']->created_at}}</p>
            </div>
            @if(isset($data['user']->updated_at))
                <div class='user-part-div col'>
                    <p class='font-weight-bold'>updated_at</p>
                    <p>{{$data['user']->updated_at}}</p>
                </div>
            @endif
        </div>
    @endforeach
</div>
@endsection