@extends('layout.app')
@section('content')
<div class='container text-center'>
    <h1 class='jumbotron'>Admin panel</h1>
    <form action='/' method='GET'>
        <div class='row'>
            <div class='col-md-4 px-4 px-md-5' style='border-right: 3px solid gray'>
                <!-----------------------------SZUKANIE---------------------------->
                <div class='row'>
                    <h6 class='font-weight-bold mx-auto'>Search and filter</h6>
                    <input type='text' class='form-control' name='search' value='{{ session('search') }}'>
                </div>
                <div class='row'>
                    <button type='submit' class='btn btn-primary mt-3 mx-auto'>Search</button>
                </div>
                <hr>

                <!-----------------------------FILTROWANIE---------------------------->
                <input type='checkbox' name='filter_active_switch' id='active_switch' value=true @if(session('filter_active_switch')==true) echo checked @endif>
                <label for='active_switch' class='font-weight-bold text-center'>Active or banned filter</label>
                <div class='row'>
                    <div class='col'>
                        <input type='radio' name='filter_active' id='active' value='active' @if(session('filter_active')=='active') echo checked @endif>
                        <label for='active'>User is active</label>
                    </div>
                    <div class='col'>
                        <input type='radio' name='filter_active' id='banned' value='banned' @if(session('filter_active  ')=='banned') echo checked @endif>
                        <label for='banned'>User is banned</label>
                    </div>
                </div>

                <hr>

                <input type='checkbox' name='filter_notifiable_email_switch' id='notifiable_email_switch' value=true @if(session('filter_notifiable_email_switch')==true) echo checked @endif>
                <label for='notifiable_email_switch' class='font-weight-bold text-center'>Notifiable e-mails filter</label>
                <div class='row'>
                    <div class='col mx-auto'>
                        <div class='col-12'>
                            <input type='radio' name='filter_notifiable_email' id='notifiable_email_yes' value='true' @if(session('filter_notifiable_email')=='true') echo checked @endif>
                            <label for='notifiable_email_yes'>User allowed notifications</label>
                        </div>
                        <div class='col-12'>
                            <input type='radio' name='filter_notifiable_email' id='notifiable_email_no' value='false' @if(session('filter_notifiable_email')=='false') echo checked @endif>
                            <label for='notifiable_email_no'>User not allowed notifications</label>
                        </div>
                    </div>
                </div>

                <hr>

                <input type='checkbox' name='filter_email_switch' id='email_switch' value=true @if(session('filter_email_switch')==true) echo checked @endif>
                <label for='email_switch' class='font-weight-bold text-center'>Users' email's providers</label>
                <div class='row'>
                    <div class='col'>
                        <input type='checkbox' name='filter_email[]' id='gmail' value='gmail'>
                        <label for='gmail'>Gmail</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_email[]' id='outlook' value='outlook'>
                        <label for='outlook'>Outlook</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_email[]' id='yahoo' value='yahoo'>
                        <label for='yahoo'>Yahoo</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_email[]' id='yandex' value='yandex'>
                        <label for='yandex'>Yandex</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_email[]' id='icloud' value='icloud'>
                        <label for='icloud'>Icloud</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_email[]' id='onet' value='onet'>
                        <label for='onet'>Onet</label>
                    </div>
                </div>
            </div>

            <div class='col-md-8 px-4 px-md-5'>
                <!-----------------------------SORTOWANIE---------------------------->
                <div class='row'>
                    <div class='col-sm-6'>
                        <h6 class='font-weight-bold mt-4 mt-md-0'>Sort by column type:</h6>
                        <select class='form-control w-50 mx-auto' name='sort_type' value='{{ session('sort_type') }}'>
                            {{--<option>{{ session('sort_type') }}</option>--}}
                            <option value='id' @if(session('sort_type') == 'id') echo selected @endif>Id</option>
                            <option value='user_name' @if(session('sort_type') == 'user_name') echo selected @endif>User name</option>
                            <option value='email' @if(session('sort_type') == 'email') echo selected @endif>E-mail</option>
                            <option value='notifiable_email' @if(session('sort_type') == 'notifiable_email') echo selected @endif>Notifiable email</option>
                            <option value='email_verified_at' @if(session('sort_type') == 'email_verified_at') echo selected @endif>Email verification date</option>
                            <option value='points' @if(session('sort_type') == 'points') echo selected @endif>Points</option>
                            <option value='steam_id' @if(session('sort_type') == 'steam_id') echo selected @endif>Steam id</option>
                            <option value='facebook_id' @if(session('sort_type') == 'facebook_id') echo selected @endif>Facebook id</option>
                            <option value='google_id' @if(session('sort_type') == 'google_id') echo selected @endif>google id</option>
                            <option value='geo' @if(session('sort_type') == 'geo') echo selected @endif>Country</option>
                            <option value='lang' @if(session('sort_type') == 'lang') echo selected @endif>Language</option>
                            <option value='ref' @if(session('sort_type') == 'ref') echo selected @endif>Ref</option>
                            <option value='ref_status' @if(session('sort_type') == 'ref_status') echo selected @endif>Ref status</option>
                            <option value='ref_code' @if(session('sort_type') == 'ref_code') echo selected @endif>Ref code</option>
                            <option value='deleted_at' @if(session('sort_type') == 'deleted_at') echo selected @endif>The date of removal</option>
                            <option value='created_at' @if(session('sort_type') == 'created_at') echo selected @endif>Creation date</option>
                            <option value='updated_at' @if(session('sort_type') == 'updated_at') echo selected @endif>Update date</option>
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
                <div class='row mb-5 user-part-div'>
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