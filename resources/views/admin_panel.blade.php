@extends('layout.app')
@section('content')
<div class='container text-center pt-3'>
    <h1 class='jumbotron'>Admin panel</h1>
    <form action='/' method='GET'>
        <div class='row'>
            <div class='col-md-4 px-4 px-md-5' id='filter-div'>
                <div class='row'>
                    <h6 class='font-weight-bold mx-auto'>Search and filter</h6>
                    <input type='text' class='form-control' name='search' value='{{ session('search') }}'>
                </div>
                <div class='row'>
                    <button type='submit' class='btn btn-primary mt-3 mx-auto'>Search</button>
                </div>
                <hr>

                <input type='checkbox' name='filter_active_switch' id='active_switch' value=true @if(session('filter_active_switch')==true) echo checked @endif>
                <label for='active_switch' class='font-weight-bold text-center'>Active or banned filter</label>
                <div class='row'>
                    <div class='col'>
                        <input type='radio' name='filter_active' id='active' value='active' @if(session('filter_active')=='active') echo checked @endif>
                        <label for='active'>User is active</label>
                    </div>
                    <div class='col'>
                        <input type='radio' name='filter_active' id='banned' value='banned' @if(session('filter_active')=='banned') echo checked @endif>
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

                <input type='checkbox' name='filter_verified_email_switch' id='verified_email_switch' value=true @if(session('filter_verified_email_switch')==true) echo checked @endif>
                <label for='verified_email_switch' class='font-weight-bold text-center'>Verified e-mail filter</label>
                <div class='row'>
                    <div class='col mx-auto'>
                        <div class='col-12'>
                            <input type='radio' name='filter_verified_email' id='verified_email_yes' value='true' @if(session('filter_verified_email')=='true') echo checked @endif>
                            <label for='verified_email_yes'>E-mail is verified</label>
                        </div>
                        <div class='col-12'>
                            <input type='radio' name='filter_verified_email' id='verified_email_no' value='false' @if(session('filter_verified_email')=='false') echo checked @endif>
                            <label for='verified_email_no'>E-mail is not verified</label>
                        </div>
                    </div>
                </div>

                <hr>

                <input type='checkbox' name='filter_points_switch' id='points_switch' value=true @if(session('filter_points_switch')==true) echo checked @endif>
                <label for='points_switch' class='font-weight-bold text-center'>User points filter (shows users whose points are above, or equal to set number)</label>
                <div class='row'>
                    <div class='col-12'>
                        <input type='number' name='filter_points' value={{session('filter_points')}}>
                    </div>
                </div>

                <hr>

                <input type='checkbox' name='filter_connected_accounts_switch' id='connected_accounts_switch' value=true @if(session('filter_connected_accounts_switch')==true) echo checked @endif>
                <label for='connected_accounts_switch' class='font-weight-bold text-center'>Connected accounts filter</label>
                <div class='row'>
                    <div class='col'>
                        <input type='checkbox' name='filter_connected_accounts_steam' id='connected_accounts_steam' value='steam' @if(session('filter_connected_accounts_steam')=='steam') echo checked @endif>
                        <label for='connected_accounts_steam'>Steam</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_connected_accounts_facebook' id='connected_accounts_facebook' value='facebook' @if(session('filter_connected_accounts_facebook')=='facebook') echo checked @endif>
                        <label for='connected_accounts_facebook'>Facebook</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_connected_accounts_google' id='connected_accounts_google' value='google' @if(session('filter_connected_accounts_google')=='google') echo checked @endif>
                        <label for='connected_accounts_google'>Google</label>
                    </div>
                </div>

                <hr>

                <input type='checkbox' name='filter_geo_switch' id='geo_switch' value=true @if(session('filter_geo_switch')==true) echo checked @endif>
                <label for='geo_switch' class='font-weight-bold text-center'>User's country filter</label>
                <div class='row'>
                    <div class='col'>
                        <input type='checkbox' name='filter_geo_poland' id='geo_poland' value='poland' @if(session('filter_geo_poland')=='poland') echo checked @endif>
                        <label for='geo_poland'>Poland</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_geo_england' id='geo_england' value='england' @if(session('filter_geo_england')=='england') echo checked @endif>
                        <label for='geo_england'>England</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_geo_netherland' id='geo_netherland' value='netherland' @if(session('filter_geo_netherland')=='netherland') echo checked @endif>
                        <label for='geo_netherland'>Netherland</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_geo_germany' id='geo_germany' value='germany' @if(session('filter_geo_germany')=='germany') echo checked @endif>
                        <label for='geo_germany'>Germany</label>
                    </div>
                </div>

                <hr>

                <input type='checkbox' name='filter_lang_switch' id='lang_switch' value=true @if(session('filter_lang_switch')==true) echo checked @endif>
                <label for='lang_switch' class='font-weight-bold text-center'>User's language filter</label>
                <div class='row'>
                    <div class='col'>
                        <input type='checkbox' name='filter_lang_pl' id='lang_pl' value='pl' @if(session('filter_lang_pl')=='pl') echo checked @endif>
                        <label for='lang_pl'>Polish</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_lang_en' id='lang_en' value='en' @if(session('filter_lang_en')=='en') echo checked @endif>
                        <label for='lang_en'>English</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_lang_nl' id='lang_nl' value='nl' @if(session('filter_lang_nl')=='nl') echo checked @endif>
                        <label for='lang_nl'>Dutch</label>
                    </div>
                    <div class='col'>
                        <input type='checkbox' name='filter_lang_ge' id='lang_ge' value='ge' @if(session('filter_lang_ge')=='ge') echo checked @endif>
                        <label for='lang_ge'>German</label>
                    </div>
                </div>

                <hr>

                <input type='checkbox' name='filter_deleted_switch' id='deleted_switch' value=true @if(session('filter_deleted_switch')==true) echo checked @endif>
                <label for='deleted_switch' class='font-weight-bold text-center'>Existence filter</label>
                <div class='row'>
                    <div class='col mx-auto'>
                        <div class='col-12'>
                            <input type='radio' name='filter_deleted' id='deleted_yes' value='true' @if(session('filter_deleted')=='true') echo checked @endif>
                            <label for='deleted_yes'>User is deleted</label>
                        </div>
                        <div class='col-12'>
                            <input type='radio' name='filter_deleted' id='deleted_no' value='false' @if(session('filter_deleted')=='false') echo checked @endif>
                            <label for='deleted_no'>User is not deleted</label>
                        </div>
                    </div>
                </div>

                <hr>

                <div class='row mb-5'>
                    <button type='submit' class='btn btn-primary mt-3 mx-auto'>Filter</button>
                </div>
            </div>

            <div class='col-md-8 px-4 px-md-5'>
                <div class='row'>
                    <div class='col-sm-6'>
                        <h6 class='font-weight-bold mt-4 mt-md-0'>Sort by column type:</h6>
                        <select class='form-control w-50 mx-auto' name='sort_type' value='{{ session('sort_type') }}'>
                            {{--<option>{{ session('sort_type') }}</option>--}}
                            <option value='id' @if(session('sort_type') == 'id') echo selected @endif>Id</option>
                            <option value='user_name' @if(session('sort_type') == 'user_name') echo selected @endif>User name</option>
                            <option value='email' @if(session('sort_type') == 'email') echo selected @endif>E-mail</option>
                            <option value='email_verified_at' @if(session('sort_type') == 'email_verified_at') echo selected @endif>Email verification date</option>
                            <option value='points' @if(session('sort_type') == 'points') echo selected @endif>Points</option>
                            <option value='steam_id' @if(session('sort_type') == 'steam_id') echo selected @endif>Steam id</option>
                            <option value='facebook_id' @if(session('sort_type') == 'facebook_id') echo selected @endif>Facebook id</option>
                            <option value='google_id' @if(session('sort_type') == 'google_id') echo selected @endif>Google id</option>
                            <option value='geo' @if(session('sort_type') == 'geo') echo selected @endif>Country</option>
                            <option value='lang' @if(session('sort_type') == 'lang') echo selected @endif>Language</option>
                            <option value='ref' @if(session('sort_type') == 'ref') echo selected @endif>Ref</option>
                            <option value='ref_status' @if(session('sort_type') == 'ref_status') echo selected @endif>Ref status</option>
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
                    @if($user->active)
                        <div class='user-part-div col d-flex align-items-center'>
                            <p class='font-weight-bold'>Active</p>
                        </div>
                    @else
                        <div class='user-part-div col d-flex align-items-center'>
                            <p class='font-weight-bold'>Banned</p>
                        </div>
                    @endif
                    @if(isset($user->email_verified_at))
                        <div class='user-part-div col'>
                            <p class='font-weight-bold'>email_verified_at</p>
                            <p>{{$user->email_verified_at}}</p>
                        </div>
                    @endif
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
            <div class='row'>
                <div class='mx-auto'>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection