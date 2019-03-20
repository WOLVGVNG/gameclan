@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    <form action='/' method='GET'>
        <div class='row'>
            <div class='col-md-4'>
                <div class='row'>
                    <h6 class='font-weight-bold'>Search</h6>
                    <input type='text' class='form-control' name='search' value='{{ session('search') }}'>
                </div>
                <div class='row'>
                    <button type='submit' class='btn btn-primary mt-3'>SEARCH</button>
                </div>
            </div>
            <div class='col-md-8'>
                <div class='row'>
                    <div class='col'>
                        <h6 class='font-weight-bold'>Sort by column type:</h6>
                        <select class='form-control' name='sort_type' value='{{ session('sort_type') }}'>
                            <option>{{ session('sort_type') }}</option>
                            <option>id</option>
                            <option>user_name</option>
                            <option>email</option>
                            <option>active</option>
                            <option>banned</option>
                            <option>notifiable_email</option>
                            <option>email_verified_at</option>
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
                        <h6 class='font-weight-bold'>Sort by order:</h6>
                        <input type='radio' name='sort_order' value='asc' id='asc'
                                @if(session('sort_order') == 'asc') echo checked @endif>
                        <label for='asc'>Ascending</label>
                        <br>
                        <input type='radio' name='sort_order' value='desc' id='desc'
                                @if(session('sort_order') == 'desc') echo checked @endif>
                        <label for='desc'>Descending</label>
                    </div>
                </div>
                <div class='row mt-2 mb-5'>
                    <div class='col-12'>
                        <button type='submit' class='btn btn-block btn-secondary'>SORT</button>
                    </div>
                </div>
            </form>

            @foreach($users as $user)
                <div class='row mb-5'>
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
            @endf`each
        </div>
    </div>
    <div class='row'>
        <div class='mx-auto'>
            {{ $users->appends('sort' => 'votes')links() }}
        </div>
    </div>

</div>
@endsection