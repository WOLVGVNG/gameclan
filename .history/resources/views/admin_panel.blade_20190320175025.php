@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    <form action='/' method='GET'>
        <div class='row'>
            <div class='col-md-4 mx-3 mx-md-0'>
                <!-----------------------------SZUKANIE---------------------------->
                <div class='row'>
                    <h6 class='font-weight-bold'>Search and filter</h6>
                    <input type='text' class='form-control' name='search' value='{{ session('search') }}'>
                </div>
                <div class='row'>
                    <button type='submit' class='btn btn-primary mt-3'>Search</button>
                </div>

                <!-----------------------------FILTROWANIE---------------------------->
                <div class='row'>
                    <div class='col'>
                        <input type='checkbox' name='filter_active' id='filter_active' value='{{ session('filter_active') }}'>
                        <label for='filter_active'>Active</label>
                    </div>
                </div>
            </div>

            <div class='col-md-8'>
                <!-----------------------------SORTOWANIE---------------------------->
                <div class='row'>
                    <div class='col-sm-6'>
                        <h6 class='font-weight-bold mt-4 mt-md-0'>Sort by column type:</h6>
                        <select class='form-control w-50 mx-auto' name='sort_type' value='{{ session('sort_type') }}'>
                            {{--<option>{{ session('sort_type') }}</option>--}}
                            <option value='id'>Id</option>
                            <option value='user_name'>User name</option>
                            <option value='email' @if(session('sort_type') == 'email') echo selected @endif>E-mail</option>
                            <option value='active'>Active</option>
                            <option value='banned'>Banned</option>
                            <option value='notifiable_email'>Notifiable email</option>
                            <option value='email_verified_at'>Email verification date</option>
                            <option value='points'>Points</option>
                            <option value='steam_id'>Steam id</option>
                            <option value='facebook_id'>Facebook id</option>
                            <option value='google_id'>google id</option>
                            <option value='geo'>Country</option>
                            <option value='lang'>Language</option>
                            <option value='ref'>Ref</option>
                            <option value='ref_status'>Ref status</option>
                            <option value='ref_code'>Ref code</option>
                            <option value='deleted_at'>The date of removal</option>
                            <option value='created_at'>Creation date</option>
                            <option value='updated_at'>Update date</option>
                        </select>
                    </div>
                    <div class='col-sm-6'>
                        <h6 class='font-weight-bold my-4 my-md-0'>Sort by order:</h6>
                        <input type='radio' name='sort_order' value='asc' id='asc'
                                @if(session('sort_order') == 'asc') echo checked @endif>
                        <label for='asc'>Ascending</label>
                        <br>
                        <input type='radio' name='sort_order' value='desc' id='desc'
                                @if(session('sort_order') == 'desc') echo checked @endif>
                        <label for='desc'>Descending</label>
                    </div>
                </div>
                <div class='col mt-2 mb-5'>
                    <button type='submit' class='btn btn-block btn-secondary'>Sort</button>
                </div>
            </form>

            <!-----------------------------WYŚWIETLANIE---------------------------->
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
            @endforeach
        </div>
    </div>

    <!-----------------------------PAGINACJA---------------------------->
    <div class='row'>
        <div class='mx-auto'>
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection